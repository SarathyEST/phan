<?php // phpcs:ignoreFile
namespace Phan\Language\Internal;

/**
 * This contains descriptions used by Phan for hover text of internal properties in the language server mode.
 *
 * Format
 *
 * '<property_name>' => 'documentation',
 *
 * NOTE: This format may change and should not be used directly.
 *
 * Sources of function/method summary info:
 *
 * 1. docs.php.net's SVN repo or website, and examples (See internal/internalsignatures.php)
 *
 *    See https://secure.php.net/manual/en/copyright.php
 *
 *    The PHP manual text and comments are covered by the [Creative Commons Attribution 3.0 License](http://creativecommons.org/licenses/by/3.0/legalcode),
 *    copyright (c) the PHP Documentation Group
 * 2. Various websites documenting individual extensions (e.g. php-ast)
 * 3. PHPStorm stubs (for anything missing from the above sources)
 *    See internal/internalsignatures.php
 *
 *    Available from https://github.com/JetBrains/phpstorm-stubs under the [Apache 2 license](https://www.apache.org/licenses/LICENSE-2.0)
 *
 *
 * CONTRIBUTING:
 *
 * Running `internal/internalstubs.php` can be used to update signature maps
 *
 * There are no plans for these signatures to diverge from what the above upstream sources contain.
 *
 * - If the descriptions cause Phan to crash, bug reports are welcome
 * - If Phan improperly extracted text from a summary (and this affects multiple signatures), patches fixing the extraction will be accepted.
 * - Otherwise, fixes for typos/grammar/inaccuracies in the summary will only be accepted once they are contributed upstream and can be regenerated (e.g. to the svn repo for docs.php.net).
 *
 *   Note that the summaries are used in a wide variety of contexts, and what makes sense for Phan may not make sense for those projects, and vice versa.
 */
return [
'classObj::label' => 'Removed (6.2) - use addLabel, getLabel, ...',
'classObj::numlabels' => 'read-only (since 6.2)',
'classObj::numstyles' => 'read-only',
'classObj::status' => 'MS_ON, MS_OFF or MS_DELETE',
'Couchbase\Document::cas' => 'The last known CAS value of the document',
'Couchbase\Document::error' => 'exception object in case of error, or NULL',
'Couchbase\Document::flags' => 'Flags, describing the encoding of the document on the server side.',
'Couchbase\Document::token' => 'The optional, opaque mutation token set after a successful mutation.

Note that the mutation token is always NULL, unless they are explicitly enabled on the
connection string (`?fetch_mutation_tokens=true`), the server version is supported (>= 4.0.0)
and the mutation operation succeeded.

If set, it can be used for enhanced durability requirements, as well as optimized consistency
for N1QL queries.',
'Couchbase\Document::value' => 'The value stored in the Couchbase.',
'Couchbase\DocumentFragment::cas' => 'The last known CAS value of the document',
'Couchbase\DocumentFragment::error' => 'exception object in case of error, or NULL',
'Couchbase\DocumentFragment::token' => 'The optional, opaque mutation token related to updated document the environment.

Note that the mutation token is always NULL, unless they are explicitly enabled on the
connection string (`?fetch_mutation_tokens=true`), the server version is supported (>= 4.0.0)
and the mutation operation succeeded.

If set, it can be used for enhanced durability requirements, as well as optimized consistency
for N1QL queries.',
'Couchbase\DocumentFragment::value' => 'The value sub-document command returned.',
'Couchbase\N1qlIndex::condition' => 'Return the string representation of the index\'s condition (the WHERE clause
of the index), or an empty String if no condition was set.

Note that the query service can present the condition in a slightly different
manner from when you declared the index: for instance it will wrap expressions
with parentheses and show the fields in an escaped format (surrounded by backticks).',
'Couchbase\N1qlIndex::fields' => 'The fields covered by index',
'Couchbase\N1qlIndex::isPrimary' => 'Is it primary index',
'Couchbase\N1qlIndex::keyspace' => 'The keyspace for the index, typically the bucket name',
'Couchbase\N1qlIndex::name' => 'Name of the index',
'Couchbase\N1qlIndex::namespace' => 'The namespace for the index. A namespace is a resource pool that contains multiple keyspaces',
'Couchbase\N1qlIndex::state' => 'The descriptive state of the index',
'Couchbase\N1qlIndex::type' => 'Type of the index',
'CURLFile::mime' => 'MIME type of the file (default is `application/octet-stream`).',
'CURLFile::name' => 'Name of the file to be uploaded.',
'CURLFile::postname' => 'The name of the file in the upload data (defaults to the name property).',
'DateInterval::d' => 'Number of days.',
'DateInterval::days' => 'If the DateInterval object was created by `DateTime::diff`, then this is the total number of days between the start and end dates. Otherwise, days will be `false`.

Before PHP 5.4.20/5.5.4 instead of `false` you will receive -99999 upon accessing the property.',
'DateInterval::f' => 'Number of microseconds, as a fraction of a second.',
'DateInterval::h' => 'Number of hours.',
'DateInterval::i' => 'Number of minutes.',
'DateInterval::invert' => 'Is `1` if the interval represents a negative time period and `0` otherwise. See `DateInterval::format`.',
'DateInterval::m' => 'Number of months.',
'DateInterval::s' => 'Number of seconds.',
'DateInterval::y' => 'Number of years.',
'DatePeriod::current' => 'During iteration this will contain the current date within the period.',
'DatePeriod::end' => 'The end date of the period.',
'DatePeriod::include_start_date' => 'Whether to include the start date in the set of recurring dates or not.',
'DatePeriod::interval' => 'An ISO 8601 repeating interval specification.',
'DatePeriod::recurrences' => 'The number of recurrences.',
'DatePeriod::start' => 'The start date of the period.',
'Directory::handle' => 'Can be used with other directory functions such as `readdir`, `rewinddir` and `closedir`.',
'Directory::path' => 'The directory that was opened.',
'DOMAttr::name' => 'The name of the attribute',
'DOMAttr::ownerElement' => 'The element which contains the attribute',
'DOMAttr::schemaTypeInfo' => 'Not implemented yet, always is `null`',
'DOMAttr::specified' => 'Not implemented yet, always is `null`',
'DOMAttr::value' => 'The value of the attribute',
'DOMCharacterData::data' => 'The contents of the node.',
'DOMCharacterData::length' => 'The length of the contents.',
'DOMDocument::actualEncoding' => '*Deprecated*. Actual encoding of the document, is a readonly equivalent to encoding.',
'DOMDocument::config' => '*Deprecated*. Configuration used when `DOMDocument::normalizeDocument` is invoked.',
'DOMDocument::doctype' => 'The Document Type Declaration associated with this document.',
'DOMDocument::documentElement' => 'This is a convenience attribute that allows direct access to the child node that is the document element of the document.',
'DOMDocument::documentURI' => 'The location of the document or `null` if undefined.',
'DOMDocument::encoding' => 'Encoding of the document, as specified by the XML declaration. This attribute is not present in the final DOM Level 3 specification, but is the only way of manipulating XML document encoding in this implementation.',
'DOMDocument::formatOutput' => 'Nicely formats output with indentation and extra space.',
'DOMDocument::implementation' => 'The `DOMImplementation` object that handles this document.',
'DOMDocument::preserveWhiteSpace' => 'Do not remove redundant white space. Default to `true`.',
'DOMDocument::recover' => '*Proprietary*. Enables recovery mode, i.e. trying to parse non-well formed documents. This attribute is not part of the DOM specification and is specific to libxml.',
'DOMDocument::resolveExternals' => 'Set it to `true` to load external entities from a doctype declaration. This is useful for including character entities in your XML document.',
'DOMDocument::standalone' => '*Deprecated*. Whether or not the document is standalone, as specified by the XML declaration, corresponds to xmlStandalone.',
'DOMDocument::strictErrorChecking' => 'Throws `DOMException` on errors. Default to `true`.',
'DOMDocument::substituteEntities' => '*Proprietary*. Whether or not to substitute entities. This attribute is not part of the DOM specification and is specific to libxml.',
'DOMDocument::validateOnParse' => 'Loads and validates against the DTD. Default to `false`.',
'DOMDocument::version' => '*Deprecated*. Version of XML, corresponds to xmlVersion.',
'DOMDocument::xmlEncoding' => 'An attribute specifying, as part of the XML declaration, the encoding of this document. This is `null` when unspecified or when it is not known, such as when the Document was created in memory.',
'DOMDocument::xmlStandalone' => 'An attribute specifying, as part of the XML declaration, whether this document is standalone. This is `false` when unspecified.',
'DOMDocument::xmlVersion' => 'An attribute specifying, as part of the XML declaration, the version number of this document. If there is no declaration and if this document supports the "XML" feature, the value is "1.0".',
'DOMDocumentType::entities' => 'A `DOMNamedNodeMap` containing the general entities, both external and internal, declared in the DTD.',
'DOMDocumentType::internalSubset' => 'The internal subset as a string, or null if there is none. This does not contain the delimiting square brackets.',
'DOMDocumentType::name' => 'The name of DTD; i.e., the name immediately following the `DOCTYPE` keyword.',
'DOMDocumentType::notations' => 'A `DOMNamedNodeMap` containing the notations declared in the DTD.',
'DOMDocumentType::publicId' => 'The public identifier of the external subset.',
'DOMDocumentType::systemId' => 'The system identifier of the external subset. This may be an absolute URI or not.',
'DOMElement::schemaTypeInfo' => 'Not implemented yet, always return `null`',
'DOMElement::tagName' => 'The element name',
'DOMEntity::actualEncoding' => 'An attribute specifying the encoding used for this entity at the time of parsing, when it is an external parsed entity. This is `null` if it an entity from the internal subset or if it is not known.',
'DOMEntity::encoding' => 'An attribute specifying, as part of the text declaration, the encoding of this entity, when it is an external parsed entity. This is `null` otherwise.',
'DOMEntity::notationName' => 'For unparsed entities, the name of the notation for the entity. For parsed entities, this is `null`.',
'DOMEntity::publicId' => 'The public identifier associated with the entity if specified, and `null` otherwise.',
'DOMEntity::systemId' => 'The system identifier associated with the entity if specified, and `null` otherwise. This may be an absolute URI or not.',
'DOMEntity::version' => 'An attribute specifying, as part of the text declaration, the version number of this entity, when it is an external parsed entity. This is `null` otherwise.',
'DOMException::code' => 'An integer indicating the type of error generated',
'DOMNamedNodeMap::length' => 'The number of nodes in the map. The range of valid child node indices is `0` to `length - 1` inclusive.',
'DOMNode::attributes' => 'A `DOMNamedNodeMap` containing the attributes of this node (if it is a `DOMElement`) or `null` otherwise.',
'DOMNode::baseURI' => 'The absolute base URI of this node or `null` if the implementation wasn\'t able to obtain an absolute URI.',
'DOMNode::childNodes' => 'A `DOMNodeList` that contains all children of this node. If there are no children, this is an empty `DOMNodeList`.',
'DOMNode::firstChild' => 'The first child of this node. If there is no such node, this returns `null`.',
'DOMNode::lastChild' => 'The last child of this node. If there is no such node, this returns `null`.',
'DOMNode::localName' => 'Returns the local part of the qualified name of this node.',
'DOMNode::namespaceURI' => 'The namespace URI of this node, or `null` if it is unspecified.',
'DOMNode::nextSibling' => 'The node immediately following this node. If there is no such node, this returns `null`.',
'DOMNode::nodeName' => 'Returns the most accurate name for the current node type',
'DOMNode::nodeType' => 'Gets the type of the node. One of the predefined XML_xxx_NODE constants',
'DOMNode::nodeValue' => 'The value of this node, depending on its type. Contrary to the W3C specification, the node value of `DOMElement` nodes is equal to DOMNode::textContent instead of `null`.',
'DOMNode::ownerDocument' => 'The `DOMDocument` object associated with this node, or `null` if this node is a `DOMDOcument`',
'DOMNode::parentNode' => 'The parent of this node. If there is no such node, this returns `null`.',
'DOMNode::prefix' => 'The namespace prefix of this node, or `null` if it is unspecified.',
'DOMNode::previousSibling' => 'The node immediately preceding this node. If there is no such node, this returns `null`.',
'DOMNode::textContent' => 'The text content of this node and its descendants.',
'DOMNodeList::length' => 'The number of nodes in the list. The range of valid child node indices is 0 to `length - 1` inclusive.',
'DOMText::wholeText' => 'Holds all the text of logically-adjacent (not separated by Element, Comment or Processing Instruction) Text nodes.',
'errorObj::code' => '//See error code constants above',
'EvChild::pid' => '*Readonly* . The process ID this watcher watches out for, or `0` , meaning any process ID.',
'EvChild::rpid' => '*Readonly* .The process ID that detected a status change.',
'EvChild::rstatus' => '*Readonly* . The process exit status caused by rpid .',
'Event::pending' => 'Whether event is pending. See About event persistence .',
'EventBuffer::contiguous_space' => 'The number of bytes stored contiguously at the front of the buffer. The bytes in a buffer may be stored in multiple separate chunks of memory; the property returns the number of bytes currently stored in the first chunk.',
'EventBuffer::length' => 'The number of bytes stored in an event buffer.',
'EventBufferEvent::fd' => 'Numeric file descriptor associated with the buffer event. Normally represents a bound socket. Equals to `null`, if there is no file descriptor(socket) associated with the buffer event.',
'EventBufferEvent::input' => 'Underlying input buffer object( `EventBuffer` )',
'EventBufferEvent::output' => 'Underlying output buffer object( `EventBuffer` )',
'EventBufferEvent::priority' => 'The priority of the events used to implement the buffer event.',
'EventListener::fd' => 'Numeric file descriptor of the underlying socket. (Added in `event-1.6.0` .)',
'EventSslContext::local_cert' => 'Path to local certificate file on filesystem. It must be a PEM-encoded file which contains certificate. It can optionally contain the certificate chain of issuers.',
'EventSslContext::local_pk' => 'Path to local private key file',
'EvLoop::backend' => '*Readonly* . The backend flags indicating the event backend in use.',
'EvLoop::data' => 'Custom data attached to loop',
'EvLoop::depth' => 'The recursion depth. See `Ev::depth` .',
'EvLoop::io_interval' => 'Higher io_interval allows *libev* to spend more time collecting `EvIo` events, so more events can be handled per iteration, at the cost of increasing latency. Timeouts (both `EvPeriodic` and `EvTimer` ) will not be affected. Setting this to a non-zero value will introduce an additional `sleep()` call into most loop iterations. The sleep time ensures that *libev* will not poll for `EvIo` events more often than once per this interval, on average. Many programs can usually benefit by setting the io_interval to a value near `0.1` , which is often enough for interactive servers(not for games). It usually doesn\'t make much sense to set it to a lower value than `0.01` , as this approaches the timing granularity of most systems.

See also FUNCTIONS CONTROLLING EVENT LOOPS .',
'EvLoop::is_default_loop' => '*Readonly* . `true` if it is the default event loop.',
'EvLoop::iteration' => 'The current iteration count of the loop. See `Ev::iteration`',
'EvLoop::pending' => 'The number of pending watchers. `0` indicates that there are no watchers pending.',
'EvLoop::timeout_interval' => 'Higher timeout_interval allows *libev* to spend more time collecting timeouts, at the expense of increased latency/jitter/inexactness(the watcher callback will be called later). `EvIo` watchers will not be affected. Setting this to a non-null value will not introduce any overhead in *libev* . See also FUNCTIONS CONTROLLING EVENT LOOPS .',
'EvPeriodic::interval' => 'The current interval value. Can be modified any time, but changes only take effect when the periodic timer fires or `EvPeriodic::again` is being called.',
'EvPeriodic::offset' => 'When repeating, this contains the offset value, otherwise this is the absolute point in time(the offset value passed to `EvPeriodic::set` , although *libev* might modify this value for better numerical stability).',
'EvSignal::signum' => 'Signal number. See the constants exported by *pcntl* extension. See also `signal(7)` man page.',
'EvStat::interval' => '*Readonly* . Hint on how quickly a change is expected to be detected and should normally be specified as `0.0` to let *libev* choose a suitable value.',
'EvStat::path' => '*Readonly* . The path to wait for status changes on.',
'EvTimer::remaining' => 'Returns the remaining time until a timer fires. If the timer is active, then this time is relative to the current event loop time, otherwise it\'s the timeout value currently configured.

That is, after instanciating an `EvTimer` with an after value of `5.0` and repeat value of `7.0` , remaining returns `5.0` . When the timer is started and one second passes, remaining will return `4.0` . When the timer expires and is restarted, it will return roughly `7.0` (likely slightly less as callback invocation takes some time too), and so on.',
'EvTimer::repeat' => 'If repeat is `0.0` , then it will automatically be stopped once the timeout is reached. If it is positive, then the timer will automatically be configured to trigger again every repeat seconds later, until stopped manually.',
'EvWatcher::data' => 'User custom data associated with the watcher',
'EvWatcher::is_active' => '*Readonly* . `true` if the watcher is active. `false` otherwise.',
'EvWatcher::is_pending' => '*Readonly* .`true` if the watcher is pending, i.e. it has outstanding events, but its callback has not yet been invoked. `false` otherwise. As long, as a watcher is pending(but not active), one must *not* change its priority.',
'EvWatcher::priority' => '`Integer` between `Ev::MINPRI` and `Ev::MAXPRI` . Pending watchers with higher priority will be invoked before watchers with lower priority, but priority will not keep watchers from being executed(except for `EvIdle` watchers). `EvIdle` watchers provide functionality to suppress invocation when higher priority events are pending.',
'FANNConnection::from_neuron' => 'The neuron where the connection starts.',
'FANNConnection::to_neuron' => 'The neuron where the connection ends.',
'FANNConnection::weight' => 'The weight of the connection.',
'GearmanException::code' => 'Prop description.',
'http\Env\Request::cookie' => 'The request’s cookies. ($_COOKIE)',
'http\Env\Request::files' => 'The request’s form uploads. ($_FILES)',
'http\Env\Request::form' => 'The request’s form parameters. ($_POST)',
'http\Env\Request::query' => 'The request’s query parameters. ($_GET)',
'http\Env\Response::cacheControl' => 'How the client should treat this response in regards to caching',
'http\Env\Response::contentDisposition' => 'The response’s MIME content disposition',
'http\Env\Response::contentEncoding' => 'See http\Env\Response::CONTENT_ENCODING_* constants',
'http\Env\Response::contentType' => 'The response’s MIME content type',
'http\Env\Response::cookies' => 'The response’s cookies.',
'http\Env\Response::etag' => 'A custom ETag',
'http\Env\Response::lastModified' => 'A “Last-Modified” time stamp.',
'http\Env\Response::request' => 'A request instance which overrides the environments default request',
'http\Env\Response::throttleChunk' => 'The chunk to send every $throttleDelay seconds.',
'http\Env\Response::throttleDelay' => 'Any throttling delay.',
'http\QueryString::instance' => 'The global instance. See http\QueryString::getGlobalInstance().',
'http\QueryString::queryArray' => 'The data',
'imageObj::height' => 'read-only',
'imageObj::resolution' => 'read-only',
'imageObj::resolutionfactor' => 'read-only',
'imageObj::width' => 'read-only',
'labelcacheMemberObj::classindex' => 'read-only',
'labelcacheMemberObj::featuresize' => 'read-only',
'labelcacheMemberObj::layerindex' => 'read-only',
'labelcacheMemberObj::markerid' => 'read-only',
'labelcacheMemberObj::numstyles' => 'read-only',
'labelcacheMemberObj::shapeindex' => 'read-only',
'labelcacheMemberObj::status' => 'read-only',
'labelcacheMemberObj::text' => 'read-only',
'labelcacheMemberObj::tileindex' => 'read-only',
'labelObj::backgroundcolor' => '(deprecated since 6.0)',
'labelObj::backgroundshadowcolor' => '(deprecated since 6.0)',
'labelObj::backgroundshadowsizex' => '(deprecated since 6.0)',
'labelObj::backgroundshadowsizey' => '(deprecated since 6.0)',
'layerObj::connectiontype' => 'read-only, use setConnectionType() to set it',
'layerObj::dump' => 'deprecated since 6.0',
'layerObj::grid' => 'only available on a layer defined as grid (MS_GRATICULE)',
'layerObj::index' => 'read-only',
'layerObj::numclasses' => 'read-only',
'layerObj::status' => 'MS_ON, MS_OFF, MS_DEFAULT or MS_DELETE',
'legendObj::outlinecolor' => 'Color of outline of box, -1 for no outline',
'legendObj::position' => 'for embedded legends, MS_UL, MS_UC, ...',
'legendObj::postlabelcache' => 'MS_TRUE, MS_FALSE',
'legendObj::status' => 'MS_ON, MS_OFF, MS_EMBED',
'libXMLError::code' => 'The error\'s code.',
'libXMLError::column' => 'The column where the error occurred.',
'libXMLError::file' => 'The filename, or empty if the XML was loaded from a string.',
'libXMLError::level' => 'the severity of the error (one of the following constants: `LIBXML_ERR_WARNING`, `LIBXML_ERR_ERROR` or `LIBXML_ERR_FATAL`)',
'libXMLError::line' => 'The line where the error occurred.',
'libXMLError::message' => 'The error message, if any.',
'lineObj::numpoints' => 'read-only',
'mapObj::defresolution' => 'pixels per inch, defaults to 72',
'mapObj::extent' => ';',
'mapObj::fontsetfilename' => 'read-only, set by setFontSet()',
'mapObj::height' => 'see setSize()',
'mapObj::labelcache' => 'no members. Used only to free the
label cache (map->labelcache->free()',
'mapObj::numlayers' => 'read-only',
'mapObj::numoutputformats' => 'read-only',
'mapObj::resolution' => 'pixels per inch, defaults to 72',
'mapObj::scaledenom' => 'read-only, set by drawMap()',
'mapObj::symbolsetfilename' => 'read-only, set by setSymbolSet()',
'mapObj::units' => 'map units type',
'mapObj::width' => 'see setSize()',
'MongoClient::connected' => 'This property will be set to `true` if we have a open connection to the database, `false` otherwise. If the connection is to a replica set, this property will only be `true` if the driver has a connection to a node matching the current read preference. This property does not take authentication into account.

This property is *deprecated* since version 1.5.0.',
'MongoClient::status' => 'This property is no longer used and will be set to `null` In driver versions 1.1.x and earlier, this may be set to a string value (e.g. `"recycled"`, `"new"`) when persistent connections are used.

This property is *deprecated* since version 1.5.0.',
'MongoCollection::db' => 'The "parent" database for this collection.',
'MongoCollection::w' => 'The number of servers to replicate a change to before returning success. Value is inherited from the parent database. The `MongoDB` class has a more detailed description of how `w` works.',
'MongoCollection::wtimeout' => 'The number of milliseconds to wait for `$this-&gt;w` replications to take place. Value is inherited from the parent database. The `MongoDB` class has a more detailed description of how `wtimeout` works.',
'MongoCursor::slaveOkay' => 'If the query should have the "slaveOkay" flag set, which allows reads on the secondary (secondaries are, by default, just for backup and not queried). Can be overridden with `MongoCursor::slaveOkay`.

This functionality is *deprecated*. Please use the PHP manual\'s section on mongo.readpreferences instead.',
'MongoCursor::timeout' => 'Set timeout in milliseconds for all database responses. Use `-1` to wait forever. Can be overridden with `MongoCursor::timeout`. This does not cause the MongoDB server to cancel the operation; it only instructs the driver to stop waiting for a response and throw a `MongoCursorTimeoutException` after a set time.',
'MongoDB::w' => 'The number of servers to replicate a change to before returning success. Inherited by instances of `MongoCollection` derived from this. `w` functionality is only available in version 1.5.1+ of the MongoDB server and 1.0.8+ of the driver.

`w` is used whenever you need to adjust the acknowledgement level (`MongoCollection::insert`, `MongoCollection::update`, `MongoCollection::remove`, `MongoCollection::save`, and `MongoCollection::ensureIndex` all support this option). With the default value (1), an acknowledged operation will return once the database server has the operation. If the server goes down before the operation has been replicated to a secondary, it is possible to lose the operation forever. Thus, you can specify `w` to be higher than one and guarantee that at least one secondary has the operation before it is considered successful.

For example, if `w` is 2, the primary and one secondary must have a record of the operation or the driver will throw a `MongoCursorException`. It is tempting to set `w` to the total number of secondaries + primary, but then if one secondary is down the operation will fail and an exception will be thrown, so usually `w=2` is safest (primary and one secondary).',
'MongoDB::wtimeout' => 'The number of milliseconds to wait for `MongoDB::$w` replications to take place. Inherited by instances of `MongoCollection` derived from this. `w` functionality is only available in version 1.5.1+ of the MongoDB server and 1.0.8+ of the driver.

Unless `wtimeout` is set, the server waits forever for replicating to `w` servers to finish. The driver defaults to waiting for 10 seconds, you can change this value to alter its behavior.',
'MongoDB\Driver\Exception\CommandException::resultDocument' => 'The result document associated with the failed command.',
'MongoDB\Driver\Exception\RuntimeException::errorLabels' => 'Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the `TransientTransactionError` label is present. The existence of a specific error label should be tested for with the `MongoDB\Driver\Exception\RuntimeException::hasErrorLabel`, instead of interpreting this `errorLabels` property manually.',
'MongoDB\Driver\Exception\WriteException::writeResult' => 'The `MongoDB\Driver\WriteResult` associated with the failed write operation.',
'MongoGridFS::chunks' => 'MongoCollection',
'MongoGridFS::chunksName' => 'string',
'MongoGridFS::filesName' => 'string',
'MongoId::id' => '<p> Note: The property name begins with a $ character. It may be accessed using',
'MongoResultException::document' => 'The raw result document as an array.',
'mysqli_driver::client_info' => 'The Client API header version',
'mysqli_driver::client_version' => 'The Client version',
'mysqli_driver::driver_version' => 'The MySQLi Driver version',
'mysqli_driver::embedded' => 'Whether MySQLi Embedded support is enabled',
'mysqli_driver::reconnect' => 'Allow or prevent reconnect (see the mysqli.reconnect INI directive)',
'mysqli_driver::report_mode' => 'Set to `MYSQLI_REPORT_OFF`, `MYSQLI_REPORT_ALL` or any combination of `MYSQLI_REPORT_STRICT` (throw Exceptions for errors), `MYSQLI_REPORT_ERROR` (report errors) and `MYSQLI_REPORT_INDEX` (errors regarding indexes). See also `mysqli_report`.',
'mysqli_sql_exception::sqlstate' => 'The sql state with the error.',
'mysqli_warning::errno' => 'Error number',
'mysqli_warning::message' => 'Message string',
'mysqli_warning::sqlstate' => 'SQL state',
'OAuthException::lastResponse' => 'The response of the exception which occurred, if any',
'outputformatObj::imagemode' => 'MS_IMAGEMODE_* value.',
'OwsrequestObj::numparams' => '(read-only)',
'OwsrequestObj::type' => '(read-only): MS_GET_REQUEST or MS_POST_REQUEST',
'Parle\ErrorInfo::id' => 'Error id.',
'Parle\ErrorInfo::position' => 'Position in the input, where the error occurred.',
'Parle\ErrorInfo::token' => 'If applicable - the `Parle\Token` related to the error, otherwise `null`.',
'Parle\Lexer::bol' => 'Start of input flag.',
'Parle\Lexer::cursor' => 'Current input offset, readonly.',
'Parle\Lexer::flags' => 'Lexer flags.',
'Parle\Lexer::marker' => 'Position of the latest token match, readonly.',
'Parle\Lexer::state' => 'Current lexer state, readonly.',
'Parle\Parser::action' => 'Current parser action that matches one of the action class constants, readonly.',
'Parle\Parser::reduceId' => 'Grammar rule id just processed in the reduce action. The value corresponds either to a token or to a production id. Readonly.',
'Parle\RLexer::bol' => 'Start of input flag.',
'Parle\RLexer::cursor' => 'Current input offset, readonly.',
'Parle\RLexer::flags' => 'Lexer flags.',
'Parle\RLexer::marker' => 'Position of the latest token match, readonly.',
'Parle\RLexer::state' => 'Current lexer state, readonly.',
'Parle\RParser::action' => 'Current parser action that matches one of the action class constants, readonly.',
'Parle\RParser::reduceId' => 'Grammar rule id just processed in the reduce action. The value corresponds either to a token or to a production id. Readonly.',
'Parle\Stack::empty' => 'Whether the stack is empty, readonly.',
'Parle\Stack::size' => 'Stack size, readonly.',
'Parle\Stack::top' => 'Element on the top of the stack.',
'Parle\Token::id' => 'Token id.',
'Parle\Token::value' => 'Token value.',
'PDOException::code' => '`SQLSTATE` error code. Use `Exception::getCode` to access it.',
'PDOException::errorInfo' => 'Corresponds to `PDO::errorInfo` or `PDOStatement::errorInfo`',
'PDOStatement::queryString' => 'Used query string.',
'php_user_filter::filtername' => 'Name of the filter registered by `stream_filter_append`.',
'pointObj::m' => 'used only for measured shape files - set to 0 for other types',
'pointObj::z' => 'used for 3d shape files. set to 0 for other types',
'Pool::class' => 'the class of the Worker',
'Pool::ctor' => 'the arguments for constructor of new Workers',
'Pool::last' => 'offset in workers of the last Worker used',
'Pool::size' => 'maximum number of Workers this Pool can use',
'Pool::workers' => 'references to Workers',
'querymapObj::style' => 'MS_NORMAL, MS_HILITE, MS_SELECTED',
'ReflectionClass::name' => 'Name of the class. Read-only, throws `ReflectionException` in attempt to write.',
'ReflectionClassConstant::class' => 'Name of the class where the class constant is defined. Read-only, throws `ReflectionException` in attempt to write.',
'ReflectionClassConstant::name' => 'Name of the class constant. Read-only, throws `ReflectionException` in attempt to write.',
'ReflectionExtension::name' => 'Name of the extension, same as calling the `ReflectionExtension::getName` method.',
'ReflectionFunction::name' => 'Name of the function. Read-only, throws `ReflectionException` in attempt to write.',
'ReflectionFunctionAbstract::name' => 'Name of the function. Read-only, throws `ReflectionException` in attempt to write.',
'ReflectionMethod::class' => 'Class name',
'ReflectionMethod::name' => 'Method name',
'ReflectionObject::name' => 'Name of the object\'s class. Read-only, throws `ReflectionException` in attempt to write.',
'ReflectionParameter::name' => 'Name of the parameter. Read-only, throws `ReflectionException` in attempt to write.',
'ReflectionProperty::class' => 'Name of the class where the property is defined. Read-only, throws `ReflectionException` in attempt to write.',
'ReflectionProperty::name' => 'Name of the property. Read-only, throws `ReflectionException` in attempt to write.',
'ReflectionZendExtension::name' => 'Name of the extension. Read-only, throws `ReflectionException` in attempt to write.',
'resultObj::classindex' => 'read-only',
'resultObj::resultindex' => 'read-only',
'resultObj::shapeindex' => 'read-only',
'resultObj::tileindex' => 'read-only',
'scalebarObj::position' => 'for embedded scalebars, MS_UL, MS_UC, ...',
'scalebarObj::status' => 'MS_ON, MS_OFF, MS_EMBED',
'shapefileObj::bounds' => 'read-only',
'shapefileObj::numshapes' => 'read-only',
'shapefileObj::source' => 'read-only',
'shapefileObj::type' => 'read-only',
'shapeObj::bounds' => 'read-only',
'shapeObj::numlines' => 'read-only',
'shapeObj::numvalues' => 'read-only',
'shapeObj::tileindex' => 'read-only',
'shapeObj::type' => 'read-only',
'shapeObj::values' => 'read-only',
'SNMP::enum_print' => 'Controls the way enum values are printed

Parameter toggles if walk/get etc. should automatically lookup enum values in the MIB and return them together with their human readable string.',
'SNMP::exceptions_enabled' => 'Controls which failures will raise SNMPException instead of warning. Use bitwise OR\'ed `SNMP::ERRNO_*` constants. By default all SNMP exceptions are disabled.',
'SNMP::info' => 'Read-only property with remote agent configuration: hostname, port, default timeout, default retries count',
'SNMP::max_oids' => 'Maximum OID per GET/SET/GETBULK request',
'SNMP::oid_increasing_check' => 'Controls disabling check for increasing OID while walking OID tree

Some SNMP agents are known for returning OIDs out of order but can complete the walk anyway. Other agents return OIDs that are out of order and can cause `SNMP::walk` to loop indefinitely until memory limit will be reached. PHP SNMP library by default performs OID increasing check and stops walking on OID tree when it detects possible loop with issuing warning about non-increasing OID faced. Set oid_increasing_check to `false` to disable this check.',
'SNMP::oid_output_format' => 'Controls OID output format',
'SNMP::quick_print' => 'Value of quick_print within the NET-SNMP library

Sets the value of quick_print within the NET-SNMP library. When this is set (1), the SNMP library will return \'quick printed\' values. This means that just the value will be printed. When quick_print is not enabled (default) the UCD SNMP library prints extra information including the type of the value (i.e. IpAddress or OID). Additionally, if quick_print is not enabled, the library prints additional hex values for all strings of three characters or less.',
'SNMP::valueretrieval' => 'Controls the method how the SNMP values will be returned',
'SNMPException::code' => '`SNMP`library error code. Use `Exception::getCode` to access it.',
'SNMPException::message' => 'Textual error message. Exception::getMessage() to access it.',
'SolrDocumentField::boost' => 'The boost value for the field',
'SolrDocumentField::name' => 'The name of the field.',
'SolrDocumentField::values' => 'An array of values for this field',
'SolrException::sourcefile' => 'The c-space source file where exception was generated',
'SolrException::sourceline' => 'The line in c-space source file where exception was generated',
'SolrException::zif_name' => 'The c-space function where exception was generated',
'SolrPingResponse::http_digested_response' => 'The response in PHP serialized format.',
'SolrPingResponse::http_raw_request' => 'The raw request sent to the server',
'SolrPingResponse::http_raw_request_headers' => 'A string of raw headers sent during the request',
'SolrPingResponse::http_raw_response' => 'The response message from the server',
'SolrPingResponse::http_raw_response_headers' => 'Response headers from the Solr server',
'SolrPingResponse::http_request_url' => 'The request URL',
'SolrPingResponse::http_status' => 'The http status of the response.',
'SolrPingResponse::http_status_message' => 'Detailed message on http status',
'SolrPingResponse::parser_mode' => 'Whether to parse the solr documents as SolrObject or SolrDocument instances.',
'SolrPingResponse::success' => 'Was there an error during the request',
'SolrResponse::http_digested_response' => 'The response in PHP serialized format.',
'SolrResponse::http_raw_request' => 'The raw request sent to the server',
'SolrResponse::http_raw_request_headers' => 'A string of raw headers sent during the request.',
'SolrResponse::http_raw_response' => 'The response message from the server.',
'SolrResponse::http_raw_response_headers' => 'Response headers from the Solr server.',
'SolrResponse::http_request_url' => 'The request URL',
'SolrResponse::http_status' => 'The http status of the response.',
'SolrResponse::http_status_message' => 'Detailed message on http status',
'SolrResponse::parser_mode' => 'Whether to parse the solr documents as SolrObject or SolrDocument instances.',
'SolrResponse::success' => 'Was there an error during the request',
'StompFrame::body' => 'Frame body.',
'StompFrame::command' => 'Frame command.',
'StompFrame::headers' => 'Frame headers (`array`).',
'streamWrapper::context' => 'The current context, or `null` if no context was passed to the caller function.

Use the `stream_context_get_options` to parse the context.',
'styleObj::opacity' => 'only supported for the AGG driver',
'symbolObj::imagepath' => 'read-only',
'symbolObj::inmapfile' => 'If set to TRUE, the symbol will be saved
inside the mapfile.',
'symbolObj::numpoints' => 'read-only',
'symbolObj::patternlength' => 'read-only',
'Threaded::worker' => 'Worker object in which this Threaded is being executed',
'tidyNode::attribute' => 'An array of string, representing the attributes names (as keys) of the current node.',
'tidyNode::child' => 'An array of `tidyNode`, representing the children of the current node.',
'tidyNode::column' => 'The column number at which the tags is located in the file',
'tidyNode::id' => 'The ID of the node (one of the tag constants, e.g. `TIDY_TAG_FRAME`)',
'tidyNode::line' => 'The line number at which the tags is located in the file',
'tidyNode::name' => 'The name of the HTML node',
'tidyNode::proprietary' => 'Indicates if the node is a proprietary tag',
'tidyNode::type' => 'The type of the node (one of the nodetype constants, e.g. `TIDY_NODETYPE_PHP`)',
'tidyNode::value' => 'The HTML representation of the node, including the surrounding tags.',
'tokyotyrantexception::code' => 'The exception code. This can be compared to `TokyoTyrant::TTE_*` constants',
'UI\Controls\Box::controls' => 'Contains controls, should not be manipulated directly',
'UI\Controls\Form::controls' => 'Contains controls, should not be manipulated directly',
'UI\Controls\Grid::controls' => 'Contains controls, should not be manipulated directly',
'UI\Controls\Group::controls' => 'Contains controls, should not be manipulated directly',
'UI\Controls\Tab::controls' => 'Contains controls, should not be manipulated directly',
'UI\Draw\Color::a' => 'Provides access to the alpha channel',
'UI\Draw\Color::b' => 'Provides access to the blue channel',
'UI\Draw\Color::g' => 'Provides access to the green channel',
'UI\Draw\Color::r' => 'Provides access to the red channel',
'UI\Point::x' => 'Holds the X co-ordinate, can be read/written directly',
'UI\Point::y' => 'Holds the Y co-ordinate, can be read/written directly',
'UI\Size::height' => 'Holds the height, can be read/written directly',
'UI\Size::width' => 'Holds the width, can be read/written directly',
'UI\Window::controls' => 'Contains controls, should not be manipulated directly',
'webObj::empty' => 'read-only',
'webObj::error' => 'read-only',
'webObj::extent' => 'read-only',
'XMLReader::attributeCount' => 'The number of attributes on the node',
'XMLReader::baseURI' => 'The base URI of the node',
'XMLReader::depth' => 'Depth of the node in the tree, starting at 0',
'XMLReader::hasAttributes' => 'Indicates if node has attributes',
'XMLReader::hasValue' => 'Indicates if node has a text value',
'XMLReader::isDefault' => 'Indicates if attribute is defaulted from DTD',
'XMLReader::isEmptyElement' => 'Indicates if node is an empty element tag',
'XMLReader::localName' => 'The local name of the node',
'XMLReader::name' => 'The qualified name of the node',
'XMLReader::namespaceURI' => 'The URI of the namespace associated with the node',
'XMLReader::nodeType' => 'The node type for the node',
'XMLReader::prefix' => 'The prefix of the namespace associated with the node',
'XMLReader::value' => 'The text value of the node',
'XMLReader::xmlLang' => 'The xml:lang scope which the node resides',
'Yaf\Controller_Abstract::_module' => 'module name',
'Yaf\Controller_Abstract::_name' => 'controller name',
'Yaf\Controller_Abstract::_request' => 'current request object',
'Yaf\Controller_Abstract::_response' => 'current response object',
'Yaf\Controller_Abstract::_view' => 'view engine object',
'Yaf\Controller_Abstract::actions' => 'You can also define a action method in a separate PHP script by using this property and \Yaf\Action_Abstract.',
'Yaf\Loader::_library' => 'By default, this value is application.directory . "/library", you can change this either in the application.ini(application.library) or call to \Yaf\Loader::setLibraryPath()',
'Yaf\Router::_current' => 'after routing phase, this indicated the name of which route is used to route current request. you can get this name by \Yaf\Router::getCurrentRoute()',
'Yaf\Router::_routes' => 'registered routes stack',
'Yaf_Controller_Abstract::_module' => 'module name',
'Yaf_Controller_Abstract::_name' => 'controller name',
'Yaf_Controller_Abstract::_request' => 'current request object',
'Yaf_Controller_Abstract::_response' => 'current response object',
'Yaf_Controller_Abstract::_view' => 'view engine object',
'Yaf_Controller_Abstract::actions' => 'You can also define a action method in a separate PHP script by using this property and `Yaf_Action_Abstract`. define action in a separate file "actions/Dummy_action.php", ); /* action method may have arguments */ public indexAction($name, $id) { /* $name and $id are unsafe raw data */ assert($name == $this->getRequest()->getParam("name")); assert($id == $this->_request->getParam("id")); } } ?> ]]> Dummy_action.php ]]>',
'Yaf_Loader::_library' => 'By default, this value is application.directory . "/library", you can change this either in the application.ini(application.library) or call to `Yaf_Loader::setLibraryPath`',
'Yaf_Router::_current' => 'after routing phase, this indicated the name of which route is used to route current request. you can get this name by `Yaf_Router::getCurrentRoute`.',
'Yaf_Router::_routes' => 'registered routes stack',
'ZendAPI_Job::_application_id' => 'The application id of the job
If the application id is not set, this job may get an application id automatically from the queue
(if the queue was assigned one). By default it is null (which indicates no application id is assigned)',
'ZendAPI_Job::_end_time' => 'UNIX timestamp that it\'s the last time this job should occurs. If _interval was set, and _end_time
was not, then this job will run forever.
By default there is no end_time, so recurrent job will run forever. If the job is not recurrent
(occurs only once) then the job will run at most once. If end_time has reached and the job was not
execute yet, it will not run.',
'ZendAPI_Job::_global_variables' => 'Bit mask holding the global variables that the user want the job\'s script to have when it\'s called
 Options are prefixed with "JOB_QUEUE_SAVE_" and may be:
POST|GET|COOKIE|SESSION|RAW_POST|SERVER|FILES|ENV
 By default there are no global variables we want to add to the job\'s script
 i.e. In order to save the current GET and COOKIE global variables,
this property should be JOB_QUEUE_SAVE_GET|JOB_QUEUE_SAVE_COOKIE (or the integer 6)
In that case (of GET and COOKIE), when the job is added, the current $_GET and
$_COOKIE variables  should be saved, and when the job\'s script is called,
those global variables should be populated',
'ZendAPI_Job::_host' => 'The host that the job was submit from',
'ZendAPI_Job::_id' => 'Unique id of the Job in the job queue',
'ZendAPI_Job::_interval' => 'The job running frequency in seconds. The job should run every _internal seconds
This property applys only to recurrent job.
By default, its value is 0 e.g. run it only once.',
'ZendAPI_Job::_name' => 'A short string describing the job',
'ZendAPI_Job::_output' => 'The job output after executing',
'ZendAPI_Job::_predecessor' => 'The job may have a dependency (another job that must be performed before this job)
 This property hold the id of the job that must be performed. if this variable is an array of integers,
it means that there are several jobs that must be performed before this job
 By default there are no dependencies',
'ZendAPI_Job::_preserved' => 'A bit that determine whether job can be deleted from history. When set, removeJob will not
delete the job from history.',
'ZendAPI_Job::_priority' => 'The priority of the job, options are the priority constants
By default the priority is set to normal (JOB_QUEUE_PRIORITY_NORMAL)',
'ZendAPI_Job::_scheduled_time' => 'The time that this job should be performed, this variables is the UNIX timestamp.
If set to 0, it means that the job should be performed now (or at least as soon as possible)
By default there is no scheduled time, which means we want to perform the job as soon as possible',
'ZendAPI_Job::_script' => 'Full path of the script that this job calls when it\'s processed',
'ZendAPI_Job::_status' => 'The status of the job
By default, the job status is waiting to being execute.
The status is determent by the queue and can not be modify by the user.',
'ZendAPI_Job::_user_variables' => 'Array holding all the variables that the user wants the job\'s script to have when it\'s called
 The structure is variable_name => variable_value
i.e. if the user_variables array is array(\'my_var\' => 8), when the script is called,
a global variable called $my_var will have the int value of 8
 By default there are no variables that we want to add to the job\'s script',
'ZipArchive::comment' => 'Comment for the archive',
'ZipArchive::filename' => 'File name in the file system',
'ZipArchive::numFiles' => 'Number of files in archive',
'ZipArchive::status' => 'Status of the Zip Archive',
'ZipArchive::statusSys' => 'System status of the Zip Archive',
];
