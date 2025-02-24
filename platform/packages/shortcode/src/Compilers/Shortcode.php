<?php

namespace Botble\Shortcode\Compilers;

class Shortcode
{
    public function __construct(
        protected string $name,
        protected array $attributes = [],
        public ?string $content = null
    ) {
    }

    public function get(string $attribute, ?string $fallback = null): string
    {
        $value = $this->{$attribute};

        if (! empty($value)) {
            return $attribute . '="' . $value . '"';
        } elseif (! empty($fallback)) {
            return $attribute . '="' . $fallback . '"';
        }

        return '';
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function toArray(): array
    {
        return $this->attributes;
    }

    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    public function __get(string $param)
    {
        return $this->attributes[$param] ?? null;
    }
}
