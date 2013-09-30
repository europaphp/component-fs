<?php

namespace Europa\Fs\Iterator;
use Europa\Fs;
use IteratorIterator;

class FsIterator extends IteratorIterator
{
  public function current()
  {
    if (parent::current()->isDir()) {
      return new Fs\Directory(parent::current()->getPathname());
    }

    return new Fs\File(parent::current()->getPathname());
  }
}