<?php
namespace My;

/**
 * Use this pattern for type hinting and enforcing use of an interface but only optionally contract details.
 *
 * The contract will be further enforced by the abstract class that implements this interface.
 */
interface InterfaceMyContract
{
    public function bar(string $str);
}
