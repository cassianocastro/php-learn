<?php
declare(strict_types=1);

namespace Tests;

/**
 *
 */
final class JSscriptTest
{

    public function __toString(): string
    {
        return <<<JS
            import { Bar } from "../js/bar";

            class Foo
            {

                constructor(foo)
                {
                    this.foo = document.querySelector(foo);
                }

                getValue()
                {
                    return `Foo: ${this.foo}`;
                }
            }

            export { Foo };

            $("button[name='submit']").submit(() => {
                $("#bar").val(new Foo("foo").getValue());
            });
        JS;
    }
}