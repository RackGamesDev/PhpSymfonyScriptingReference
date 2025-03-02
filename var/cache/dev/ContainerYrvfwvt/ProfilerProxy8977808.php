<?php

namespace ContainerYrvfwvt;

class ProfilerProxy8977808 extends \Symfony\Component\HttpKernel\Profiler\Profiler implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'collectors' => [parent::class, 'collectors', null],
        "\0".parent::class."\0".'enabled' => [parent::class, 'enabled', null],
        "\0".parent::class."\0".'initiallyEnabled' => [parent::class, 'initiallyEnabled', null],
        "\0".parent::class."\0".'logger' => [parent::class, 'logger', null],
        "\0".parent::class."\0".'storage' => [parent::class, 'storage', null],
        'collectors' => [parent::class, 'collectors', null],
        'enabled' => [parent::class, 'enabled', null],
        'initiallyEnabled' => [parent::class, 'initiallyEnabled', null],
        'logger' => [parent::class, 'logger', null],
        'storage' => [parent::class, 'storage', null],
    ];

    public function disable(): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->disable(...\func_get_args());
        } else {
            parent::disable(...\func_get_args());
        }
    }

    public function enable(): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->enable(...\func_get_args());
        } else {
            parent::enable(...\func_get_args());
        }
    }

    public function isEnabled(): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->isEnabled(...\func_get_args());
        }

        return parent::isEnabled(...\func_get_args());
    }

    public function loadProfileFromResponse(\Symfony\Component\HttpFoundation\Response $response): ?\Symfony\Component\HttpKernel\Profiler\Profile
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->loadProfileFromResponse(...\func_get_args());
        }

        return parent::loadProfileFromResponse(...\func_get_args());
    }

    public function loadProfile(string $token): ?\Symfony\Component\HttpKernel\Profiler\Profile
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->loadProfile(...\func_get_args());
        }

        return parent::loadProfile(...\func_get_args());
    }

    public function saveProfile(\Symfony\Component\HttpKernel\Profiler\Profile $profile): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->saveProfile(...\func_get_args());
        }

        return parent::saveProfile(...\func_get_args());
    }

    public function purge(): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->purge(...\func_get_args());
        } else {
            parent::purge(...\func_get_args());
        }
    }

    public function find(?string $ip, ?string $url, ?int $limit, ?string $method, ?string $start, ?string $end, ?string $statusCode = null, ?\Closure $filter = null): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->find(...\func_get_args());
        }

        return parent::find(...\func_get_args());
    }

    public function collect(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\HttpFoundation\Response $response, ?\Throwable $exception = null): ?\Symfony\Component\HttpKernel\Profiler\Profile
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->collect(...\func_get_args());
        }

        return parent::collect(...\func_get_args());
    }

    public function reset(): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->reset(...\func_get_args());
        } else {
            parent::reset(...\func_get_args());
        }
    }

    public function all(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->all(...\func_get_args());
        }

        return parent::all(...\func_get_args());
    }

    public function set(array $collectors = []): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->set(...\func_get_args());
        } else {
            parent::set(...\func_get_args());
        }
    }

    public function add(\Symfony\Component\HttpKernel\DataCollector\DataCollectorInterface $collector): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->add(...\func_get_args());
        } else {
            parent::add(...\func_get_args());
        }
    }

    public function has(string $name): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->has(...\func_get_args());
        }

        return parent::has(...\func_get_args());
    }

    public function get(string $name): \Symfony\Component\HttpKernel\DataCollector\DataCollectorInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->get(...\func_get_args());
        }

        return parent::get(...\func_get_args());
    }
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ProfilerProxy8977808', false)) {
    \class_alias(__NAMESPACE__.'\\ProfilerProxy8977808', 'ProfilerProxy8977808', false);
}
