<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'AcVendor\\DI\\Annotation\\Inject' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Annotation/Inject.php',
    'AcVendor\\DI\\Annotation\\Injectable' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Annotation/Injectable.php',
    'AcVendor\\DI\\Cache\\ArrayCache' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Cache/ArrayCache.php',
    'AcVendor\\DI\\Container' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Container.php',
    'AcVendor\\DI\\ContainerBuilder' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/ContainerBuilder.php',
    'AcVendor\\DI\\Debug' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Debug.php',
    'AcVendor\\DI\\Definition\\AliasDefinition' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/AliasDefinition.php',
    'AcVendor\\DI\\Definition\\ArrayDefinition' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/ArrayDefinition.php',
    'AcVendor\\DI\\Definition\\ArrayDefinitionExtension' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/ArrayDefinitionExtension.php',
    'AcVendor\\DI\\Definition\\CacheableDefinition' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/CacheableDefinition.php',
    'AcVendor\\DI\\Definition\\DecoratorDefinition' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/DecoratorDefinition.php',
    'AcVendor\\DI\\Definition\\Definition' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Definition.php',
    'AcVendor\\DI\\Definition\\Dumper\\ObjectDefinitionDumper' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Dumper/ObjectDefinitionDumper.php',
    'AcVendor\\DI\\Definition\\EntryReference' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/EntryReference.php',
    'AcVendor\\DI\\Definition\\EnvironmentVariableDefinition' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/EnvironmentVariableDefinition.php',
    'AcVendor\\DI\\Definition\\Exception\\AnnotationException' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Exception/AnnotationException.php',
    'AcVendor\\DI\\Definition\\Exception\\DefinitionException' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Exception/DefinitionException.php',
    'AcVendor\\DI\\Definition\\FactoryDefinition' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/FactoryDefinition.php',
    'AcVendor\\DI\\Definition\\HasSubDefinition' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/HasSubDefinition.php',
    'AcVendor\\DI\\Definition\\Helper\\ArrayDefinitionExtensionHelper' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Helper/ArrayDefinitionExtensionHelper.php',
    'AcVendor\\DI\\Definition\\Helper\\DefinitionHelper' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Helper/DefinitionHelper.php',
    'AcVendor\\DI\\Definition\\Helper\\EnvironmentVariableDefinitionHelper' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Helper/EnvironmentVariableDefinitionHelper.php',
    'AcVendor\\DI\\Definition\\Helper\\FactoryDefinitionHelper' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Helper/FactoryDefinitionHelper.php',
    'AcVendor\\DI\\Definition\\Helper\\ObjectDefinitionHelper' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Helper/ObjectDefinitionHelper.php',
    'AcVendor\\DI\\Definition\\Helper\\StringDefinitionHelper' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Helper/StringDefinitionHelper.php',
    'AcVendor\\DI\\Definition\\Helper\\ValueDefinitionHelper' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Helper/ValueDefinitionHelper.php',
    'AcVendor\\DI\\Definition\\InstanceDefinition' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/InstanceDefinition.php',
    'AcVendor\\DI\\Definition\\ObjectDefinition' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/ObjectDefinition.php',
    'AcVendor\\DI\\Definition\\ObjectDefinition\\MethodInjection' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/ObjectDefinition/MethodInjection.php',
    'AcVendor\\DI\\Definition\\ObjectDefinition\\PropertyInjection' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/ObjectDefinition/PropertyInjection.php',
    'AcVendor\\DI\\Definition\\Resolver\\ArrayResolver' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Resolver/ArrayResolver.php',
    'AcVendor\\DI\\Definition\\Resolver\\DecoratorResolver' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Resolver/DecoratorResolver.php',
    'AcVendor\\DI\\Definition\\Resolver\\DefinitionResolver' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Resolver/DefinitionResolver.php',
    'AcVendor\\DI\\Definition\\Resolver\\EnvironmentVariableResolver' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Resolver/EnvironmentVariableResolver.php',
    'AcVendor\\DI\\Definition\\Resolver\\FactoryResolver' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Resolver/FactoryResolver.php',
    'AcVendor\\DI\\Definition\\Resolver\\InstanceInjector' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Resolver/InstanceInjector.php',
    'AcVendor\\DI\\Definition\\Resolver\\ObjectCreator' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Resolver/ObjectCreator.php',
    'AcVendor\\DI\\Definition\\Resolver\\ParameterResolver' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Resolver/ParameterResolver.php',
    'AcVendor\\DI\\Definition\\Resolver\\ResolverDispatcher' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Resolver/ResolverDispatcher.php',
    'AcVendor\\DI\\Definition\\Resolver\\SelfResolver' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Resolver/SelfResolver.php',
    'AcVendor\\DI\\Definition\\SelfResolvingDefinition' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/SelfResolvingDefinition.php',
    'AcVendor\\DI\\Definition\\Source\\AnnotationReader' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Source/AnnotationReader.php',
    'AcVendor\\DI\\Definition\\Source\\Autowiring' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Source/Autowiring.php',
    'AcVendor\\DI\\Definition\\Source\\CachedDefinitionSource' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Source/CachedDefinitionSource.php',
    'AcVendor\\DI\\Definition\\Source\\DefinitionArray' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Source/DefinitionArray.php',
    'AcVendor\\DI\\Definition\\Source\\DefinitionFile' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Source/DefinitionFile.php',
    'AcVendor\\DI\\Definition\\Source\\DefinitionSource' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Source/DefinitionSource.php',
    'AcVendor\\DI\\Definition\\Source\\MutableDefinitionSource' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Source/MutableDefinitionSource.php',
    'AcVendor\\DI\\Definition\\Source\\SourceChain' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/Source/SourceChain.php',
    'AcVendor\\DI\\Definition\\StringDefinition' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/StringDefinition.php',
    'AcVendor\\DI\\Definition\\ValueDefinition' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Definition/ValueDefinition.php',
    'AcVendor\\DI\\DependencyException' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/DependencyException.php',
    'AcVendor\\DI\\FactoryInterface' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/FactoryInterface.php',
    'AcVendor\\DI\\Factory\\RequestedEntry' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Factory/RequestedEntry.php',
    'AcVendor\\DI\\InvokerInterface' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/InvokerInterface.php',
    'AcVendor\\DI\\Invoker\\DefinitionParameterResolver' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Invoker/DefinitionParameterResolver.php',
    'AcVendor\\DI\\Invoker\\FactoryParameterResolver' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Invoker/FactoryParameterResolver.php',
    'AcVendor\\DI\\NotFoundException' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/NotFoundException.php',
    'AcVendor\\DI\\Proxy\\ProxyFactory' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Proxy/ProxyFactory.php',
    'AcVendor\\DI\\Scope' => $baseDir . '/ac_vendor/php-di/php-di/src/DI/Scope.php',
    'AcVendor\\GuzzleHttp\\Client' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/Client.php',
    'AcVendor\\GuzzleHttp\\ClientInterface' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/ClientInterface.php',
    'AcVendor\\GuzzleHttp\\Cookie\\CookieJar' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
    'AcVendor\\GuzzleHttp\\Cookie\\CookieJarInterface' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
    'AcVendor\\GuzzleHttp\\Cookie\\FileCookieJar' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
    'AcVendor\\GuzzleHttp\\Cookie\\SessionCookieJar' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
    'AcVendor\\GuzzleHttp\\Cookie\\SetCookie' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
    'AcVendor\\GuzzleHttp\\Exception\\BadResponseException' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
    'AcVendor\\GuzzleHttp\\Exception\\ClientException' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/Exception/ClientException.php',
    'AcVendor\\GuzzleHttp\\Exception\\ConnectException' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/Exception/ConnectException.php',
    'AcVendor\\GuzzleHttp\\Exception\\GuzzleException' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/Exception/GuzzleException.php',
    'AcVendor\\GuzzleHttp\\Exception\\RequestException' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/Exception/RequestException.php',
    'AcVendor\\GuzzleHttp\\Exception\\SeekException' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/Exception/SeekException.php',
    'AcVendor\\GuzzleHttp\\Exception\\ServerException' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/Exception/ServerException.php',
    'AcVendor\\GuzzleHttp\\Exception\\TooManyRedirectsException' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
    'AcVendor\\GuzzleHttp\\Exception\\TransferException' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/Exception/TransferException.php',
    'AcVendor\\GuzzleHttp\\HandlerStack' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/HandlerStack.php',
    'AcVendor\\GuzzleHttp\\Handler\\CurlFactory' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php',
    'AcVendor\\GuzzleHttp\\Handler\\CurlFactoryInterface' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php',
    'AcVendor\\GuzzleHttp\\Handler\\CurlHandler' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/Handler/CurlHandler.php',
    'AcVendor\\GuzzleHttp\\Handler\\CurlMultiHandler' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php',
    'AcVendor\\GuzzleHttp\\Handler\\EasyHandle' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/Handler/EasyHandle.php',
    'AcVendor\\GuzzleHttp\\Handler\\MockHandler' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/Handler/MockHandler.php',
    'AcVendor\\GuzzleHttp\\Handler\\Proxy' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/Handler/Proxy.php',
    'AcVendor\\GuzzleHttp\\Handler\\StreamHandler' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/Handler/StreamHandler.php',
    'AcVendor\\GuzzleHttp\\MessageFormatter' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/MessageFormatter.php',
    'AcVendor\\GuzzleHttp\\Middleware' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/Middleware.php',
    'AcVendor\\GuzzleHttp\\Pool' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/Pool.php',
    'AcVendor\\GuzzleHttp\\PrepareBodyMiddleware' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php',
    'AcVendor\\GuzzleHttp\\Promise\\AggregateException' => $baseDir . '/ac_vendor/guzzlehttp/promises/src/AggregateException.php',
    'AcVendor\\GuzzleHttp\\Promise\\CancellationException' => $baseDir . '/ac_vendor/guzzlehttp/promises/src/CancellationException.php',
    'AcVendor\\GuzzleHttp\\Promise\\Coroutine' => $baseDir . '/ac_vendor/guzzlehttp/promises/src/Coroutine.php',
    'AcVendor\\GuzzleHttp\\Promise\\EachPromise' => $baseDir . '/ac_vendor/guzzlehttp/promises/src/EachPromise.php',
    'AcVendor\\GuzzleHttp\\Promise\\FulfilledPromise' => $baseDir . '/ac_vendor/guzzlehttp/promises/src/FulfilledPromise.php',
    'AcVendor\\GuzzleHttp\\Promise\\Promise' => $baseDir . '/ac_vendor/guzzlehttp/promises/src/Promise.php',
    'AcVendor\\GuzzleHttp\\Promise\\PromiseInterface' => $baseDir . '/ac_vendor/guzzlehttp/promises/src/PromiseInterface.php',
    'AcVendor\\GuzzleHttp\\Promise\\PromisorInterface' => $baseDir . '/ac_vendor/guzzlehttp/promises/src/PromisorInterface.php',
    'AcVendor\\GuzzleHttp\\Promise\\RejectedPromise' => $baseDir . '/ac_vendor/guzzlehttp/promises/src/RejectedPromise.php',
    'AcVendor\\GuzzleHttp\\Promise\\RejectionException' => $baseDir . '/ac_vendor/guzzlehttp/promises/src/RejectionException.php',
    'AcVendor\\GuzzleHttp\\Promise\\TaskQueue' => $baseDir . '/ac_vendor/guzzlehttp/promises/src/TaskQueue.php',
    'AcVendor\\GuzzleHttp\\Promise\\TaskQueueInterface' => $baseDir . '/ac_vendor/guzzlehttp/promises/src/TaskQueueInterface.php',
    'AcVendor\\GuzzleHttp\\Psr7\\AppendStream' => $baseDir . '/ac_vendor/guzzlehttp/psr7/src/AppendStream.php',
    'AcVendor\\GuzzleHttp\\Psr7\\BufferStream' => $baseDir . '/ac_vendor/guzzlehttp/psr7/src/BufferStream.php',
    'AcVendor\\GuzzleHttp\\Psr7\\CachingStream' => $baseDir . '/ac_vendor/guzzlehttp/psr7/src/CachingStream.php',
    'AcVendor\\GuzzleHttp\\Psr7\\DroppingStream' => $baseDir . '/ac_vendor/guzzlehttp/psr7/src/DroppingStream.php',
    'AcVendor\\GuzzleHttp\\Psr7\\FnStream' => $baseDir . '/ac_vendor/guzzlehttp/psr7/src/FnStream.php',
    'AcVendor\\GuzzleHttp\\Psr7\\InflateStream' => $baseDir . '/ac_vendor/guzzlehttp/psr7/src/InflateStream.php',
    'AcVendor\\GuzzleHttp\\Psr7\\LazyOpenStream' => $baseDir . '/ac_vendor/guzzlehttp/psr7/src/LazyOpenStream.php',
    'AcVendor\\GuzzleHttp\\Psr7\\LimitStream' => $baseDir . '/ac_vendor/guzzlehttp/psr7/src/LimitStream.php',
    'AcVendor\\GuzzleHttp\\Psr7\\MessageTrait' => $baseDir . '/ac_vendor/guzzlehttp/psr7/src/MessageTrait.php',
    'AcVendor\\GuzzleHttp\\Psr7\\MultipartStream' => $baseDir . '/ac_vendor/guzzlehttp/psr7/src/MultipartStream.php',
    'AcVendor\\GuzzleHttp\\Psr7\\NoSeekStream' => $baseDir . '/ac_vendor/guzzlehttp/psr7/src/NoSeekStream.php',
    'AcVendor\\GuzzleHttp\\Psr7\\PumpStream' => $baseDir . '/ac_vendor/guzzlehttp/psr7/src/PumpStream.php',
    'AcVendor\\GuzzleHttp\\Psr7\\Request' => $baseDir . '/ac_vendor/guzzlehttp/psr7/src/Request.php',
    'AcVendor\\GuzzleHttp\\Psr7\\Response' => $baseDir . '/ac_vendor/guzzlehttp/psr7/src/Response.php',
    'AcVendor\\GuzzleHttp\\Psr7\\Rfc7230' => $baseDir . '/ac_vendor/guzzlehttp/psr7/src/Rfc7230.php',
    'AcVendor\\GuzzleHttp\\Psr7\\ServerRequest' => $baseDir . '/ac_vendor/guzzlehttp/psr7/src/ServerRequest.php',
    'AcVendor\\GuzzleHttp\\Psr7\\Stream' => $baseDir . '/ac_vendor/guzzlehttp/psr7/src/Stream.php',
    'AcVendor\\GuzzleHttp\\Psr7\\StreamDecoratorTrait' => $baseDir . '/ac_vendor/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
    'AcVendor\\GuzzleHttp\\Psr7\\StreamWrapper' => $baseDir . '/ac_vendor/guzzlehttp/psr7/src/StreamWrapper.php',
    'AcVendor\\GuzzleHttp\\Psr7\\UploadedFile' => $baseDir . '/ac_vendor/guzzlehttp/psr7/src/UploadedFile.php',
    'AcVendor\\GuzzleHttp\\Psr7\\Uri' => $baseDir . '/ac_vendor/guzzlehttp/psr7/src/Uri.php',
    'AcVendor\\GuzzleHttp\\Psr7\\UriNormalizer' => $baseDir . '/ac_vendor/guzzlehttp/psr7/src/UriNormalizer.php',
    'AcVendor\\GuzzleHttp\\Psr7\\UriResolver' => $baseDir . '/ac_vendor/guzzlehttp/psr7/src/UriResolver.php',
    'AcVendor\\GuzzleHttp\\RedirectMiddleware' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/RedirectMiddleware.php',
    'AcVendor\\GuzzleHttp\\RequestOptions' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/RequestOptions.php',
    'AcVendor\\GuzzleHttp\\RetryMiddleware' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/RetryMiddleware.php',
    'AcVendor\\GuzzleHttp\\TransferStats' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/TransferStats.php',
    'AcVendor\\GuzzleHttp\\UriTemplate' => $baseDir . '/ac_vendor/guzzlehttp/guzzle/src/UriTemplate.php',
    'AcVendor\\Interop\\Container\\ContainerInterface' => $baseDir . '/ac_vendor/container-interop/container-interop/src/Interop/Container/ContainerInterface.php',
    'AcVendor\\Interop\\Container\\Exception\\ContainerException' => $baseDir . '/ac_vendor/container-interop/container-interop/src/Interop/Container/Exception/ContainerException.php',
    'AcVendor\\Interop\\Container\\Exception\\NotFoundException' => $baseDir . '/ac_vendor/container-interop/container-interop/src/Interop/Container/Exception/NotFoundException.php',
    'AcVendor\\Invoker\\CallableResolver' => $baseDir . '/ac_vendor/php-di/invoker/src/CallableResolver.php',
    'AcVendor\\Invoker\\Exception\\InvocationException' => $baseDir . '/ac_vendor/php-di/invoker/src/Exception/InvocationException.php',
    'AcVendor\\Invoker\\Exception\\NotCallableException' => $baseDir . '/ac_vendor/php-di/invoker/src/Exception/NotCallableException.php',
    'AcVendor\\Invoker\\Exception\\NotEnoughParametersException' => $baseDir . '/ac_vendor/php-di/invoker/src/Exception/NotEnoughParametersException.php',
    'AcVendor\\Invoker\\Invoker' => $baseDir . '/ac_vendor/php-di/invoker/src/Invoker.php',
    'AcVendor\\Invoker\\InvokerInterface' => $baseDir . '/ac_vendor/php-di/invoker/src/InvokerInterface.php',
    'AcVendor\\Invoker\\ParameterResolver\\AssociativeArrayResolver' => $baseDir . '/ac_vendor/php-di/invoker/src/ParameterResolver/AssociativeArrayResolver.php',
    'AcVendor\\Invoker\\ParameterResolver\\Container\\ParameterNameContainerResolver' => $baseDir . '/ac_vendor/php-di/invoker/src/ParameterResolver/Container/ParameterNameContainerResolver.php',
    'AcVendor\\Invoker\\ParameterResolver\\Container\\TypeHintContainerResolver' => $baseDir . '/ac_vendor/php-di/invoker/src/ParameterResolver/Container/TypeHintContainerResolver.php',
    'AcVendor\\Invoker\\ParameterResolver\\DefaultValueResolver' => $baseDir . '/ac_vendor/php-di/invoker/src/ParameterResolver/DefaultValueResolver.php',
    'AcVendor\\Invoker\\ParameterResolver\\NumericArrayResolver' => $baseDir . '/ac_vendor/php-di/invoker/src/ParameterResolver/NumericArrayResolver.php',
    'AcVendor\\Invoker\\ParameterResolver\\ParameterResolver' => $baseDir . '/ac_vendor/php-di/invoker/src/ParameterResolver/ParameterResolver.php',
    'AcVendor\\Invoker\\ParameterResolver\\ResolverChain' => $baseDir . '/ac_vendor/php-di/invoker/src/ParameterResolver/ResolverChain.php',
    'AcVendor\\Invoker\\ParameterResolver\\TypeHintResolver' => $baseDir . '/ac_vendor/php-di/invoker/src/ParameterResolver/TypeHintResolver.php',
    'AcVendor\\Invoker\\Reflection\\CallableReflection' => $baseDir . '/ac_vendor/php-di/invoker/src/Reflection/CallableReflection.php',
    'AcVendor\\PhpDocReader\\AnnotationException' => $baseDir . '/ac_vendor/php-di/phpdoc-reader/src/PhpDocReader/AnnotationException.php',
    'AcVendor\\PhpDocReader\\PhpDocReader' => $baseDir . '/ac_vendor/php-di/phpdoc-reader/src/PhpDocReader/PhpDocReader.php',
    'AcVendor\\PhpDocReader\\PhpParser\\TokenParser' => $baseDir . '/ac_vendor/php-di/phpdoc-reader/src/PhpDocReader/PhpParser/TokenParser.php',
    'AcVendor\\PhpDocReader\\PhpParser\\UseStatementParser' => $baseDir . '/ac_vendor/php-di/phpdoc-reader/src/PhpDocReader/PhpParser/UseStatementParser.php',
    'AcVendor\\Psr\\Container\\ContainerExceptionInterface' => $baseDir . '/ac_vendor/psr/container/src/ContainerExceptionInterface.php',
    'AcVendor\\Psr\\Container\\ContainerInterface' => $baseDir . '/ac_vendor/psr/container/src/ContainerInterface.php',
    'AcVendor\\Psr\\Container\\NotFoundExceptionInterface' => $baseDir . '/ac_vendor/psr/container/src/NotFoundExceptionInterface.php',
    'AcVendor\\Psr\\Http\\Message\\MessageInterface' => $baseDir . '/ac_vendor/psr/http-message/src/MessageInterface.php',
    'AcVendor\\Psr\\Http\\Message\\RequestInterface' => $baseDir . '/ac_vendor/psr/http-message/src/RequestInterface.php',
    'AcVendor\\Psr\\Http\\Message\\ResponseInterface' => $baseDir . '/ac_vendor/psr/http-message/src/ResponseInterface.php',
    'AcVendor\\Psr\\Http\\Message\\ServerRequestInterface' => $baseDir . '/ac_vendor/psr/http-message/src/ServerRequestInterface.php',
    'AcVendor\\Psr\\Http\\Message\\StreamInterface' => $baseDir . '/ac_vendor/psr/http-message/src/StreamInterface.php',
    'AcVendor\\Psr\\Http\\Message\\UploadedFileInterface' => $baseDir . '/ac_vendor/psr/http-message/src/UploadedFileInterface.php',
    'AcVendor\\Psr\\Http\\Message\\UriInterface' => $baseDir . '/ac_vendor/psr/http-message/src/UriInterface.php',
    'AcVendor\\Psr\\Log\\AbstractLogger' => $baseDir . '/ac_vendor/psr/log/Psr/Log/AbstractLogger.php',
    'AcVendor\\Psr\\Log\\InvalidArgumentException' => $baseDir . '/ac_vendor/psr/log/Psr/Log/InvalidArgumentException.php',
    'AcVendor\\Psr\\Log\\LogLevel' => $baseDir . '/ac_vendor/psr/log/Psr/Log/LogLevel.php',
    'AcVendor\\Psr\\Log\\LoggerAwareInterface' => $baseDir . '/ac_vendor/psr/log/Psr/Log/LoggerAwareInterface.php',
    'AcVendor\\Psr\\Log\\LoggerAwareTrait' => $baseDir . '/ac_vendor/psr/log/Psr/Log/LoggerAwareTrait.php',
    'AcVendor\\Psr\\Log\\LoggerInterface' => $baseDir . '/ac_vendor/psr/log/Psr/Log/LoggerInterface.php',
    'AcVendor\\Psr\\Log\\LoggerTrait' => $baseDir . '/ac_vendor/psr/log/Psr/Log/LoggerTrait.php',
    'AcVendor\\Psr\\Log\\NullLogger' => $baseDir . '/ac_vendor/psr/log/Psr/Log/NullLogger.php',
    'AcVendor\\Psr\\Log\\Test\\DummyTest' => $baseDir . '/ac_vendor/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
    'AcVendor\\Psr\\Log\\Test\\LoggerInterfaceTest' => $baseDir . '/ac_vendor/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
    'AcVendor\\Psr\\Log\\Test\\TestLogger' => $baseDir . '/ac_vendor/psr/log/Psr/Log/Test/TestLogger.php',
    'ActiveCampaign_For_WooCommerce_Runtime_Exception' => $baseDir . '/includes/exceptions/class-activecampaign-for-woocommerce-runtime-exception.php',
    'Activecampaign_For_Woocommerce' => $baseDir . '/includes/class-activecampaign-for-woocommerce.php',
    'Activecampaign_For_Woocommerce_Activator' => $baseDir . '/includes/class-activecampaign-for-woocommerce-activator.php',
    'Activecampaign_For_Woocommerce_Add_Accepts_Marketing_To_Customer_Meta_Command' => $baseDir . '/includes/commands/class-activecampaign-for-woocommerce-add-accepts-marketing-to-customer-meta-command.php',
    'Activecampaign_For_Woocommerce_Add_Cart_Id_To_Order_Command' => $baseDir . '/includes/commands/class-activecampaign-for-woocommerce-add-cart-id-to-order-command.php',
    'Activecampaign_For_Woocommerce_Admin' => $baseDir . '/admin/class-activecampaign-for-woocommerce-admin.php',
    'Activecampaign_For_Woocommerce_Admin_Settings_Updated_Event' => $baseDir . '/includes/events/class-activecampaign-for-woocommerce-admin-settings-updated-event.php',
    'Activecampaign_For_Woocommerce_Admin_Settings_Validator' => $baseDir . '/admin/class-activecampaign-for-woocommerce-admin-settings-validator.php',
    'Activecampaign_For_Woocommerce_Api_Client' => $baseDir . '/includes/api-client/class-activecampaign-for-woocommerce-api-client.php',
    'Activecampaign_For_Woocommerce_Api_Serializable' => $baseDir . '/includes/traits/class-activecampaign-for-woocommerce-api-serializable-trait.php',
    'Activecampaign_For_Woocommerce_Cart_Emptied_Event' => $baseDir . '/includes/events/class-activecampaign-for-woocommerce-cart-emptied-event.php',
    'Activecampaign_For_Woocommerce_Cart_Updated_Event' => $baseDir . '/includes/events/class-activecampaign-for-woocommerce-cart-updated-event.php',
    'Activecampaign_For_Woocommerce_Clear_User_Meta_Command' => $baseDir . '/includes/commands/class-activecampaign-for-woocommerce-clear-user-meta-command.php',
    'Activecampaign_For_Woocommerce_Connection' => $baseDir . '/includes/models/class-activecampaign-for-woocommerce-connection.php',
    'Activecampaign_For_Woocommerce_Connection_Option' => $baseDir . '/includes/models/class-activecampaign-for-woocommerce-connection-option.php',
    'Activecampaign_For_Woocommerce_Connection_Option_Repository' => $baseDir . '/includes/repositories/class-activecampaign-for-woocommerce-connection-option-repository.php',
    'Activecampaign_For_Woocommerce_Connection_Repository' => $baseDir . '/includes/repositories/class-activecampaign-for-woocommerce-connection-repository.php',
    'Activecampaign_For_Woocommerce_Create_And_Save_Cart_Id_Command' => $baseDir . '/includes/commands/class-activecampaign-for-woocommerce-create-and-save-cart-id-command.php',
    'Activecampaign_For_Woocommerce_Create_Or_Update_Connection_Option_Command' => $baseDir . '/includes/commands/class-activecampaign-for-woocommerce-create-or-update-connection-option-command.php',
    'Activecampaign_For_Woocommerce_Deactivator' => $baseDir . '/includes/class-activecampaign-for-woocommerce-deactivator.php',
    'Activecampaign_For_Woocommerce_Delete_Cart_Id_Command' => $baseDir . '/includes/commands/class-activecampaign-for-woocommerce-delete-cart-id-command.php',
    'Activecampaign_For_Woocommerce_Ecom_Customer' => $baseDir . '/includes/models/class-activecampaign-for-woocommerce-ecom-customer.php',
    'Activecampaign_For_Woocommerce_Ecom_Customer_Repository' => $baseDir . '/includes/repositories/class-activecampaign-for-woocommerce-ecom-customer-repository.php',
    'Activecampaign_For_Woocommerce_Ecom_Model_Interface' => $baseDir . '/includes/models/interfaces/class-activecampaign-for-woocommerce-model-interface.php',
    'Activecampaign_For_Woocommerce_Ecom_Order' => $baseDir . '/includes/models/class-activecampaign-for-woocommerce-ecom-order.php',
    'Activecampaign_For_Woocommerce_Ecom_Order_Factory' => $baseDir . '/includes/models/factories/class-activecampaign-for-woocommerce-ecom-order-factory.php',
    'Activecampaign_For_Woocommerce_Ecom_Order_Repository' => $baseDir . '/includes/repositories/class-activecampaign-for-woocommerce-ecom-order-repository.php',
    'Activecampaign_For_Woocommerce_Ecom_Product' => $baseDir . '/includes/models/class-activecampaign-for-woocommerce-ecom-product.php',
    'Activecampaign_For_Woocommerce_Ecom_Product_Factory' => $baseDir . '/includes/models/factories/class-activecampaign-for-woocommerce-ecom-product-factory.php',
    'Activecampaign_For_Woocommerce_Executable_Interface' => $baseDir . '/includes/commands/class-activecampaign-for-woocommerce-executable-interface.php',
    'Activecampaign_For_Woocommerce_Has_Email' => $baseDir . '/includes/models/interfaces/class-activecampaign-for-woocommerce-has-email.php',
    'Activecampaign_For_Woocommerce_Has_Id' => $baseDir . '/includes/models/interfaces/class-activecampaign-for-woocommerce-has-id.php',
    'Activecampaign_For_Woocommerce_I18n' => $baseDir . '/includes/class-activecampaign-for-woocommerce-i18n.php',
    'Activecampaign_For_Woocommerce_Interacts_With_Api' => $baseDir . '/includes/traits/class-activecampaign-for-woocommerce-interacts-with-api-trait.php',
    'Activecampaign_For_Woocommerce_Loader' => $baseDir . '/includes/class-activecampaign-for-woocommerce-loader.php',
    'Activecampaign_For_Woocommerce_Logger' => $baseDir . '/includes/class-activecampaign-for-woocommerce-logger.php',
    'Activecampaign_For_Woocommerce_Public' => $baseDir . '/public/class-activecampaign-for-woocommerce-public.php',
    'Activecampaign_For_Woocommerce_Repository_Interface' => $baseDir . '/includes/repositories/interfaces/class-activecampaign-for-woocommerce-repository-interface.php',
    'Activecampaign_For_Woocommerce_Resource_Not_Found_Exception' => $baseDir . '/includes/exceptions/class-activecampaign-for-woocommerce-resource-not-found-exception.php',
    'Activecampaign_For_Woocommerce_Resource_Unprocessable_Exception' => $baseDir . '/includes/exceptions/class-activecampaign-for-woocommerce-resource-unprocessable-exception.php',
    'Activecampaign_For_Woocommerce_Set_Connection_Id_Cache_Command' => $baseDir . '/includes/commands/class-activecampaign-for-woocommerce-set-connection-id-cache-command.php',
    'Activecampaign_For_Woocommerce_Sync_Guest_Abandoned_Cart_Command' => $baseDir . '/includes/commands/class-activecampaign-for-woocommerce-sync-guest-abandoned-cart-command.php',
    'Activecampaign_For_Woocommerce_Triggerable_Interface' => $baseDir . '/includes/events/class-activecampaign-for-woocommerce-triggerable-interface.php',
    'Activecampaign_For_Woocommerce_Uninstall_Plugin_Command' => $baseDir . '/includes/commands/class-activecampaign-for-woocommerce-uninstall-plugin-command.php',
    'Activecampaign_For_Woocommerce_Update_Cart_Command' => $baseDir . '/includes/commands/class-activecampaign-for-woocommerce-update-cart-command.php',
    'Activecampaign_For_Woocommerce_User_Meta_Service' => $baseDir . '/includes/services/class-activecampaign-for-woocommerce-user-meta-service.php',
);