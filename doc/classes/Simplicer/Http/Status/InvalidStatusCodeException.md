***

# InvalidStatusCodeException

Class InvalidStatusCodeException

Exception thrown when an invalid HTTP status code is encountered.

* Full name: `\Simplicer\Http\Status\InvalidStatusCodeException`
* Parent class: [`Exception`](../../../Exception.md)



## Properties


### statusCode



```php
protected string $statusCode
```






***

## Methods


### __construct

InvalidStatusCodeException constructor.

```php
public __construct(string $statusCode, string $message = &quot;&quot;, int $code, \Throwable|null $previous = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$statusCode` | **string** | The invalid status code |
| `$message` | **string** | The exception message |
| `$code` | **int** | The exception code |
| `$previous` | **\Throwable&#124;null** | The previous throwable used for exception chaining |





***

### getStatusCode

Get the invalid status code.

```php
public getStatusCode(): string
```









**Return Value:**

The invalid status code




***


***
> Automatically generated on 2024-06-21
