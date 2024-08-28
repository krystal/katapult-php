# PHP

## `manual`

This directory contains non-generated files.

## Class name generation

The class name is derived from the method, URI and expected status code.

A URI of `/organizations/:organization` will result in `Model\OrganizationsOrganizationGetResponse200`

A URI of `/organizations/_` will result in `Model\OrganizationsGetResponse200`

A POST with an expected HTTP response of 201 and a URI of `/world/europe/britain/manchester` will result in `Model\WorldEuropeBritainManchesterPostResponse201`

A change to the URI therefore changes the class name.

Characters that aren't valid within a class name are silently stripped out.
