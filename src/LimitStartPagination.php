<?php

namespace Nps;

use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Concerns\SdkPage;
use Nps\Core\Contracts\BaseModel;
use Nps\Core\Contracts\BasePage;
use Nps\Core\Conversion;
use Nps\Core\Conversion\Contracts\Converter;
use Nps\Core\Conversion\Contracts\ConverterSource;
use Nps\Core\Conversion\ListOf;
use Psr\Http\Message\ResponseInterface;

/**
 * @phpstan-type LimitStartPaginationShape = array{
 *   data?: list<mixed>|null, total?: int|null, start?: int|null
 * }
 *
 * @template TItem
 *
 * @implements BasePage<TItem>
 */
final class LimitStartPagination implements BaseModel, BasePage
{
    /** @use SdkModel<LimitStartPaginationShape> */
    use SdkModel;

    /** @use SdkPage<TItem> */
    use SdkPage;

    /** @var list<TItem>|null $data */
    #[Optional(list: 'mixed')]
    public ?array $data;

    #[Optional]
    public ?int $total;

    #[Optional]
    public ?int $start;

    /**
     * @internal
     *
     * @param array{
     *   method: string,
     *   path: string,
     *   query: array<string,mixed>,
     *   headers: array<string,string|list<string>|null>,
     *   body: mixed,
     * } $requestInfo
     */
    public function __construct(
        private string|Converter|ConverterSource $convert,
        private Client $client,
        private array $requestInfo,
        private RequestOptions $options,
        private ResponseInterface $response,
        private mixed $parsedBody,
    ) {
        $this->initialize();

        if (!is_array($this->parsedBody)) {
            return;
        }

        // @phpstan-ignore-next-line argument.type
        self::__unserialize($this->parsedBody);

        if (is_array($items = $this->offsetGet('data'))) {
            $parsed = Conversion::coerce(new ListOf($convert), value: $items);
            // @phpstan-ignore-next-line
            $this->offsetSet('data', value: $parsed);
        }
    }

    /** @return list<TItem> */
    public function getItems(): array
    {
        // @phpstan-ignore-next-line return.type
        return $this->offsetGet('data') ?? [];
    }

    /**
     * @internal
     *
     * @return array{
     *   array{
     *     method: string,
     *     path: string,
     *     query: array<string,mixed>,
     *     headers: array<string,string|list<string>|null>,
     *     body: mixed,
     *   },
     *   RequestOptions,
     * }|null
     */
    public function nextRequest(): ?array
    {
        $items = $this->getItems();
        // @phpstan-ignore-next-line binaryOp.invalid
        $curr = ($this->start ?? 0) + ($cnt = count($items));
        if (!$cnt || ($curr >= ($this->total ?? null))) {
            return null;
        }

        $nextRequest = array_merge_recursive(
            $this->requestInfo,
            ['query' => ['start' => $curr]]
        );

        // @phpstan-ignore-next-line return.type
        return [$nextRequest, $this->options];
    }
}
