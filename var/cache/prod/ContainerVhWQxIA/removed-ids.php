<?php

namespace ContainerVhWQxIA;

return [
    'App\\DataFixtures\\AppFixtures' => true,
    'App\\Entity' => true,
    'App\\Repository\\UsuarioRepository' => true,
    'Doctrine\\Bundle\\DoctrineBundle\\Controller\\ProfilerController' => true,
    'Doctrine\\Bundle\\DoctrineBundle\\Dbal\\ManagerRegistryAwareConnectionProvider' => true,
    'Doctrine\\Common\\Persistence\\ManagerRegistry' => true,
    'Doctrine\\DBAL\\Connection' => true,
    'Doctrine\\DBAL\\Connection $defaultConnection' => true,
    'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => true,
    'Doctrine\\ORM\\EntityManagerInterface' => true,
    'Doctrine\\ORM\\EntityManagerInterface $defaultEntityManager' => true,
    'Doctrine\\Persistence\\ManagerRegistry' => true,
    'Psr\\Cache\\CacheItemPoolInterface' => true,
    'Psr\\Cache\\CacheItemPoolInterface $doctrineResultCachePool' => true,
    'Psr\\Cache\\CacheItemPoolInterface $doctrineSystemCachePool' => true,
    'Psr\\Container\\ContainerInterface $parameterBag' => true,
    'Psr\\EventDispatcher\\EventDispatcherInterface' => true,
    'Psr\\Log\\LoggerInterface' => true,
    'SessionHandlerInterface' => true,
    'Symfony\\Component\\Config\\Loader\\LoaderInterface' => true,
    'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => true,
    'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => true,
    'Symfony\\Component\\DependencyInjection\\ReverseContainer' => true,
    'Symfony\\Component\\ErrorHandler\\ErrorRenderer\\FileLinkFormatter' => true,
    'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => true,
    'Symfony\\Component\\Filesystem\\Filesystem' => true,
    'Symfony\\Component\\HttpFoundation\\Request' => true,
    'Symfony\\Component\\HttpFoundation\\RequestStack' => true,
    'Symfony\\Component\\HttpFoundation\\Response' => true,
    'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface' => true,
    'Symfony\\Component\\HttpFoundation\\UriSigner' => true,
    'Symfony\\Component\\HttpFoundation\\UrlHelper' => true,
    'Symfony\\Component\\HttpKernel\\Config\\FileLocator' => true,
    'Symfony\\Component\\HttpKernel\\Fragment\\FragmentUriGeneratorInterface' => true,
    'Symfony\\Component\\HttpKernel\\HttpCache\\StoreInterface' => true,
    'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => true,
    'Symfony\\Component\\HttpKernel\\KernelInterface' => true,
    'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => true,
    'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => true,
    'Symfony\\Component\\Routing\\RequestContext' => true,
    'Symfony\\Component\\Routing\\RequestContextAwareInterface' => true,
    'Symfony\\Component\\Routing\\RouterInterface' => true,
    'Symfony\\Component\\Stopwatch\\Stopwatch' => true,
    'Symfony\\Component\\String\\Slugger\\SluggerInterface' => true,
    'Symfony\\Contracts\\Cache\\CacheInterface' => true,
    'Symfony\\Contracts\\Cache\\CacheInterface $doctrineResultCachePool' => true,
    'Symfony\\Contracts\\Cache\\CacheInterface $doctrineSystemCachePool' => true,
    'Symfony\\Contracts\\Cache\\TagAwareCacheInterface' => true,
    'Symfony\\Contracts\\Cache\\TagAwareCacheInterface $doctrineResultCachePool' => true,
    'Symfony\\Contracts\\Cache\\TagAwareCacheInterface $doctrineSystemCachePool' => true,
    'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => true,
    'Twig\\Environment' => true,
    'argument_metadata_factory' => true,
    'argument_resolver' => true,
    'argument_resolver.backed_enum_resolver' => true,
    'argument_resolver.controller_locator' => true,
    'argument_resolver.datetime' => true,
    'argument_resolver.default' => true,
    'argument_resolver.query_parameter_value_resolver' => true,
    'argument_resolver.request' => true,
    'argument_resolver.request_attribute' => true,
    'argument_resolver.request_payload' => true,
    'argument_resolver.service' => true,
    'argument_resolver.session' => true,
    'argument_resolver.variadic' => true,
    'cache.adapter.apcu' => true,
    'cache.adapter.array' => true,
    'cache.adapter.doctrine_dbal' => true,
    'cache.adapter.filesystem' => true,
    'cache.adapter.memcached' => true,
    'cache.adapter.pdo' => true,
    'cache.adapter.psr6' => true,
    'cache.adapter.redis' => true,
    'cache.adapter.redis_tag_aware' => true,
    'cache.adapter.system' => true,
    'cache.app.taggable' => true,
    'cache.default_clearer' => true,
    'cache.default_doctrine_dbal_provider' => true,
    'cache.default_marshaller' => true,
    'cache.default_memcached_provider' => true,
    'cache.default_redis_provider' => true,
    'cache.doctrine.orm.default.metadata' => true,
    'cache.early_expiration_handler' => true,
    'cache.property_info' => true,
    'cache.serializer' => true,
    'cache.validator' => true,
    'cache_clearer' => true,
    'config.resource.self_checking_resource_checker' => true,
    'config_builder.warmer' => true,
    'config_cache_factory' => true,
    'console.command.about' => true,
    'console.command.assets_install' => true,
    'console.command.cache_clear' => true,
    'console.command.cache_pool_clear' => true,
    'console.command.cache_pool_delete' => true,
    'console.command.cache_pool_invalidate_tags' => true,
    'console.command.cache_pool_list' => true,
    'console.command.cache_pool_prune' => true,
    'console.command.cache_warmup' => true,
    'console.command.config_debug' => true,
    'console.command.config_dump_reference' => true,
    'console.command.container_debug' => true,
    'console.command.container_lint' => true,
    'console.command.debug_autowiring' => true,
    'console.command.dotenv_debug' => true,
    'console.command.event_dispatcher_debug' => true,
    'console.command.router_debug' => true,
    'console.command.router_match' => true,
    'console.command.secrets_decrypt_to_local' => true,
    'console.command.secrets_encrypt_from_local' => true,
    'console.command.secrets_generate_key' => true,
    'console.command.secrets_list' => true,
    'console.command.secrets_remove' => true,
    'console.command.secrets_reveal' => true,
    'console.command.secrets_set' => true,
    'console.command.yaml_lint' => true,
    'console.error_listener' => true,
    'console.messenger.application' => true,
    'console.messenger.execute_command_handler' => true,
    'console.suggest_missing_package_subscriber' => true,
    'container.env' => true,
    'container.env_var_processor' => true,
    'container.getenv' => true,
    'controller.cache_attribute_listener' => true,
    'controller.template_attribute_listener' => true,
    'controller_resolver' => true,
    'data_collector.doctrine' => true,
    'data_collector.twig' => true,
    'debug.debug_handlers_listener' => true,
    'debug.file_link_formatter' => true,
    'debug.stopwatch' => true,
    'dependency_injection.config.container_parameters_resource_checker' => true,
    'doctrine.cache_clear_metadata_command' => true,
    'doctrine.cache_clear_query_cache_command' => true,
    'doctrine.cache_clear_result_command' => true,
    'doctrine.cache_collection_region_command' => true,
    'doctrine.clear_entity_region_command' => true,
    'doctrine.clear_query_region_command' => true,
    'doctrine.database_create_command' => true,
    'doctrine.database_drop_command' => true,
    'doctrine.dbal.connection' => true,
    'doctrine.dbal.connection.configuration' => true,
    'doctrine.dbal.connection.event_manager' => true,
    'doctrine.dbal.connection_expiries' => true,
    'doctrine.dbal.connection_factory' => true,
    'doctrine.dbal.connection_factory.dsn_parser' => true,
    'doctrine.dbal.debug_middleware' => true,
    'doctrine.dbal.default_connection.configuration' => true,
    'doctrine.dbal.default_connection.event_manager' => true,
    'doctrine.dbal.default_schema_asset_filter_manager' => true,
    'doctrine.dbal.default_schema_manager_factory' => true,
    'doctrine.dbal.event_manager' => true,
    'doctrine.dbal.idle_connection_listener' => true,
    'doctrine.dbal.idle_connection_middleware' => true,
    'doctrine.dbal.idle_connection_middleware.default' => true,
    'doctrine.dbal.legacy_schema_manager_factory' => true,
    'doctrine.dbal.logging_middleware' => true,
    'doctrine.dbal.schema_asset_filter_manager' => true,
    'doctrine.dbal.well_known_schema_asset_filter' => true,
    'doctrine.debug_data_holder' => true,
    'doctrine.id_generator_locator' => true,
    'doctrine.mapping_info_command' => true,
    'doctrine.migrations.configuration' => true,
    'doctrine.migrations.configuration_loader' => true,
    'doctrine.migrations.connection_loader' => true,
    'doctrine.migrations.connection_registry_loader' => true,
    'doctrine.migrations.dependency_factory' => true,
    'doctrine.migrations.em_loader' => true,
    'doctrine.migrations.entity_manager_registry_loader' => true,
    'doctrine.migrations.metadata_storage' => true,
    'doctrine.migrations.migrations_factory' => true,
    'doctrine.migrations.storage.table_storage' => true,
    'doctrine.orm.command.entity_manager_provider' => true,
    'doctrine.orm.configuration' => true,
    'doctrine.orm.container_repository_factory' => true,
    'doctrine.orm.default_attribute_metadata_driver' => true,
    'doctrine.orm.default_configuration' => true,
    'doctrine.orm.default_entity_listener_resolver' => true,
    'doctrine.orm.default_entity_manager.event_manager' => true,
    'doctrine.orm.default_listeners.attach_entity_listeners' => true,
    'doctrine.orm.default_manager_configurator' => true,
    'doctrine.orm.default_metadata_cache' => true,
    'doctrine.orm.default_metadata_cache_warmer' => true,
    'doctrine.orm.default_metadata_driver' => true,
    'doctrine.orm.default_query_cache' => true,
    'doctrine.orm.default_result_cache' => true,
    'doctrine.orm.entity_manager.abstract' => true,
    'doctrine.orm.entity_value_resolver' => true,
    'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_listener' => true,
    'doctrine.orm.listeners.doctrine_token_provider_schema_listener' => true,
    'doctrine.orm.listeners.lock_store_schema_listener' => true,
    'doctrine.orm.listeners.pdo_session_handler_schema_listener' => true,
    'doctrine.orm.listeners.resolve_target_entity' => true,
    'doctrine.orm.manager_configurator.abstract' => true,
    'doctrine.orm.naming_strategy.default' => true,
    'doctrine.orm.naming_strategy.underscore' => true,
    'doctrine.orm.naming_strategy.underscore_number_aware' => true,
    'doctrine.orm.proxy_cache_warmer' => true,
    'doctrine.orm.quote_strategy.ansi' => true,
    'doctrine.orm.quote_strategy.default' => true,
    'doctrine.orm.security.user.provider' => true,
    'doctrine.orm.typed_field_mapper.default' => true,
    'doctrine.orm.validator.unique' => true,
    'doctrine.orm.validator_initializer' => true,
    'doctrine.query_dql_command' => true,
    'doctrine.query_sql_command' => true,
    'doctrine.result_cache_pool' => true,
    'doctrine.schema_create_command' => true,
    'doctrine.schema_drop_command' => true,
    'doctrine.schema_update_command' => true,
    'doctrine.schema_validate_command' => true,
    'doctrine.system_cache_pool' => true,
    'doctrine.twig.doctrine_extension' => true,
    'doctrine.ulid_generator' => true,
    'doctrine.uuid_generator' => true,
    'doctrine_migrations.current_command' => true,
    'doctrine_migrations.diff_command' => true,
    'doctrine_migrations.dump_schema_command' => true,
    'doctrine_migrations.execute_command' => true,
    'doctrine_migrations.generate_command' => true,
    'doctrine_migrations.latest_command' => true,
    'doctrine_migrations.migrate_command' => true,
    'doctrine_migrations.rollup_command' => true,
    'doctrine_migrations.schema_filter_listener' => true,
    'doctrine_migrations.status_command' => true,
    'doctrine_migrations.sync_metadata_command' => true,
    'doctrine_migrations.up_to_date_command' => true,
    'doctrine_migrations.version_command' => true,
    'doctrine_migrations.versions_command' => true,
    'error_handler.error_renderer.html' => true,
    'error_renderer' => true,
    'error_renderer.html' => true,
    'exception_listener' => true,
    'file_locator' => true,
    'filesystem' => true,
    'form.type.entity' => true,
    'form.type_guesser.doctrine' => true,
    'fragment.handler' => true,
    'fragment.renderer.inline' => true,
    'fragment.uri_generator' => true,
    'http_cache' => true,
    'http_cache.store' => true,
    'locale_aware_listener' => true,
    'locale_listener' => true,
    'logger' => true,
    'parameter_bag' => true,
    'process.messenger.process_message_handler' => true,
    'response_listener' => true,
    'reverse_container' => true,
    'router.cache_warmer' => true,
    'router.default' => true,
    'router.request_context' => true,
    'router_listener' => true,
    'routing.loader.attribute' => true,
    'routing.loader.attribute.directory' => true,
    'routing.loader.attribute.file' => true,
    'routing.loader.container' => true,
    'routing.loader.directory' => true,
    'routing.loader.glob' => true,
    'routing.loader.php' => true,
    'routing.loader.psr4' => true,
    'routing.loader.xml' => true,
    'routing.loader.yml' => true,
    'routing.resolver' => true,
    'secrets.decryption_key' => true,
    'secrets.env_var_loader' => true,
    'secrets.local_vault' => true,
    'secrets.vault' => true,
    'session.abstract_handler' => true,
    'session.factory' => true,
    'session.handler' => true,
    'session.handler.native' => true,
    'session.handler.native_file' => true,
    'session.marshaller' => true,
    'session.marshalling_handler' => true,
    'session.storage.factory' => true,
    'session.storage.factory.mock_file' => true,
    'session.storage.factory.native' => true,
    'session.storage.factory.php_bridge' => true,
    'session_listener' => true,
    'slugger' => true,
    'twig' => true,
    'twig.app_variable' => true,
    'twig.command.debug' => true,
    'twig.command.lint' => true,
    'twig.configurator.environment' => true,
    'twig.error_renderer.html' => true,
    'twig.error_renderer.html.inner' => true,
    'twig.extension.assets' => true,
    'twig.extension.debug' => true,
    'twig.extension.debug.stopwatch' => true,
    'twig.extension.emoji' => true,
    'twig.extension.expression' => true,
    'twig.extension.htmlsanitizer' => true,
    'twig.extension.httpfoundation' => true,
    'twig.extension.httpkernel' => true,
    'twig.extension.profiler' => true,
    'twig.extension.routing' => true,
    'twig.extension.serializer' => true,
    'twig.extension.trans' => true,
    'twig.extension.weblink' => true,
    'twig.extension.yaml' => true,
    'twig.loader' => true,
    'twig.loader.chain' => true,
    'twig.loader.filesystem' => true,
    'twig.loader.native_filesystem' => true,
    'twig.profile' => true,
    'twig.runtime.httpkernel' => true,
    'twig.runtime.serializer' => true,
    'twig.runtime_loader' => true,
    'twig.template_cache_warmer' => true,
    'twig.template_iterator' => true,
    'uri_signer' => true,
    'url_helper' => true,
    'validate_request_listener' => true,
    'workflow.twig_extension' => true,
];
