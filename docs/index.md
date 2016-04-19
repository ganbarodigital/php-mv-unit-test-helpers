---
currentSection: overview
currentItem: home
pageflow_next_url: license.html
pageflow_next_text: License
---

# Introduction

## What Is The Unit Test Helpers Library?

Ganbaro Digital's _Unit Test Helpers Library_ provides an easy-to-use collection of helper classes for your PHPUnit unit tests.

## Goals

The _Unit Test Helpers Library_'s purpose is to collect generic utilities that make it easier to achieve 100% code coverage on your unit tests.

## Design Constraints

The library's design is guided by the following constraint(s):

* _Fundamental development dependency of other libraries_: This library provides code for other libraries to use in their unit tests. Composer does not support multual dependencies (two or more packages depending on each other). As a result, this library needs to depend on very little (if anything at all).

## Questions?

This package was created by [Stuart Herbert](http://www.stuartherbert.com) for [Ganbaro Digital Ltd](http://ganbarodigital.com). Follow [@ganbarodigital](https://twitter.com/ganbarodigital) or [@stuherbert](https://twitter.com/stuherbert) for updates.
