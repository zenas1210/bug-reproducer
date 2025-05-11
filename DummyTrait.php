<?php

trait DummyTrait
{
    public ?string $dummyProperty1 = null; // This doesn't crash

    public ?string $dummyProperty2 { // This crashes
        get => null;
    }
}
