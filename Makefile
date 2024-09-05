.PHONY: help

help: ## Print this help message
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

.DEFAULT_GOAL := help

.PHONY: build
build:
	./generator/generate

.PHONY: download-spec
download-spec:
	wget -O katapult-core-openapi.json https://api.katapult.io/core/v1/schema/openapi.json
	wget -O katapult-public-openapi.json https://api.katapult.io/public/v1/schema/openapi.json

.PHONY: download-staging-spec
download-staging-spec:
	wget -O katapult-core-openapi.json https://api.staging.katapult.dev/core/v1/schema/openapi.json
	wget -O katapult-public-openapi.json https://api.staging.katapult.dev/public/v1/schema/openapi.json
