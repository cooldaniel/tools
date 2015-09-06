<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/api.css" />
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.js"></script>
<title>Yii Framework Class Reference</title>
</head>

<body>
<div id="apiPage">

<div id="apiHeader">
<a href="http://www.yiiframework.com">Yii Framework</a> v1.1.6 Class Reference
</div><!-- end of header -->

<div id="content">
<?php echo $content; ?>
<table class="summaryTable docIndex">
<colgroup>
	<col class="col-package" />
	<col class="col-class" />
	<col class="col-description" />
</colgroup>
<tr>
  <th>Package</th><th>Class</th><th>Description</th>
</tr>
<tr>
  <td rowspan="2"><a name="system"></a>system</td>
  <td><a href="Yii.html">Yii</a></td>
  <td>Yii is a helper class serving common framework functionalities.</td>
</tr>
<tr>
  <td><a href="YiiBase.html">YiiBase</a></td>
  <td>YiiBase is a helper class serving common framework functionalities.</td>
</tr>
<tr>
  <td rowspan="27"><a name="system.base"></a>system.base</td>
  <td><a href="CApplication.html">CApplication</a></td>
  <td>CApplication is the base class for all application classes.</td>
</tr>
<tr>
  <td><a href="CApplicationComponent.html">CApplicationComponent</a></td>
  <td>CApplicationComponent is the base class for application component classes.</td>
</tr>
<tr>
  <td><a href="CBehavior.html">CBehavior</a></td>
  <td>CBehavior is a convenient base class for behavior classes.</td>
</tr>
<tr>
  <td><a href="CComponent.html">CComponent</a></td>
  <td>CComponent is the base class for all components.</td>
</tr>
<tr>
  <td><a href="CEnumerable.html">CEnumerable</a></td>
  <td>CEnumerable is the base class for all enumerable types.</td>
</tr>
<tr>
  <td><a href="CErrorEvent.html">CErrorEvent</a></td>
  <td>CErrorEvent represents the parameter for the <a href="CApplication.html#onError">onError</a> event.</td>
</tr>
<tr>
  <td><a href="CErrorHandler.html">CErrorHandler</a></td>
  <td>CErrorHandler handles uncaught PHP errors and exceptions.</td>
</tr>
<tr>
  <td><a href="CEvent.html">CEvent</a></td>
  <td>CEvent is the base class for all event classes.</td>
</tr>
<tr>
  <td><a href="CException.html">CException</a></td>
  <td>CException represents a generic exception for all purposes.</td>
</tr>
<tr>
  <td><a href="CExceptionEvent.html">CExceptionEvent</a></td>
  <td>CExceptionEvent represents the parameter for the <a href="CApplication.html#onException">onException</a> event.</td>
</tr>
<tr>
  <td><a href="CHttpException.html">CHttpException</a></td>
  <td>CHttpException represents an exception caused by invalid operations of end-users.</td>
</tr>
<tr>
  <td><a href="CModel.html">CModel</a></td>
  <td>CModel is the base class providing the common features needed by data model objects.</td>
</tr>
<tr>
  <td><a href="CModelBehavior.html">CModelBehavior</a></td>
  <td>CModelBehavior is a base class for behaviors that are attached to a model component.</td>
</tr>
<tr>
  <td><a href="CModelEvent.html">CModelEvent</a></td>
  <td>CModelEvent class.</td>
</tr>
<tr>
  <td><a href="CModule.html">CModule</a></td>
  <td>CModule is the base class for module and application classes.</td>
</tr>
<tr>
  <td><a href="CSecurityManager.html">CSecurityManager</a></td>
  <td>CSecurityManager provides private keys, hashing and encryption functions.</td>
</tr>
<tr>
  <td><a href="CStatePersister.html">CStatePersister</a></td>
  <td>CStatePersister implements a file-based persistent data storage.</td>
</tr>
<tr>
  <td><a href="IAction.html">IAction</a></td>
  <td>IAction is the interface that must be implemented by controller actions.</td>
</tr>
<tr>
  <td><a href="IApplicationComponent.html">IApplicationComponent</a></td>
  <td>IApplicationComponent is the interface that all application components must implement.</td>
</tr>
<tr>
  <td><a href="IAuthManager.html">IAuthManager</a></td>
  <td>IAuthManager interface is implemented by an auth manager application component.</td>
</tr>
<tr>
  <td><a href="IBehavior.html">IBehavior</a></td>
  <td>IBehavior interfaces is implemented by all behavior classes.</td>
</tr>
<tr>
  <td><a href="IFilter.html">IFilter</a></td>
  <td>IFilter is the interface that must be implemented by action filters.</td>
</tr>
<tr>
  <td><a href="IStatePersister.html">IStatePersister</a></td>
  <td>IStatePersister is the interface that must be implemented by state persister calsses.</td>
</tr>
<tr>
  <td><a href="IUserIdentity.html">IUserIdentity</a></td>
  <td>IUserIdentity interface is implemented by a user identity class.</td>
</tr>
<tr>
  <td><a href="IViewRenderer.html">IViewRenderer</a></td>
  <td>IViewRenderer interface is implemented by a view renderer class.</td>
</tr>
<tr>
  <td><a href="IWebServiceProvider.html">IWebServiceProvider</a></td>
  <td>IWebServiceProvider interface may be implemented by Web service provider classes.</td>
</tr>
<tr>
  <td><a href="IWebUser.html">IWebUser</a></td>
  <td>IWebUser interface is implemented by a <a href="CWebApplication.html#user">user application component</a>.</td>
</tr>
<tr>
  <td rowspan="13"><a name="system.caching"></a>system.caching</td>
  <td><a href="CApcCache.html">CApcCache</a></td>
  <td>CApcCache provides APC caching in terms of an application component.</td>
</tr>
<tr>
  <td><a href="CCache.html">CCache</a></td>
  <td>CCache is the base class for cache classes with different cache storage implementation.</td>
</tr>
<tr>
  <td><a href="CDbCache.html">CDbCache</a></td>
  <td>CDbCache implements a cache application component by storing cached data in a database.</td>
</tr>
<tr>
  <td><a href="CDummyCache.html">CDummyCache</a></td>
  <td>CDummyCache is a placeholder cache component.</td>
</tr>
<tr>
  <td><a href="CEAcceleratorCache.html">CEAcceleratorCache</a></td>
  <td>CEAcceleratorCache implements a cache application module based on <a href="http://eaccelerator.net/">eaccelerator</a>.</td>
</tr>
<tr>
  <td><a href="CFileCache.html">CFileCache</a></td>
  <td>CFileCache provides a file-based caching mechanism.</td>
</tr>
<tr>
  <td><a href="CMemCache.html">CMemCache</a></td>
  <td>CMemCache implements a cache application component based on <a href="http://www.danga.com/memcached/">memcached</a>.</td>
</tr>
<tr>
  <td><a href="CMemCacheServerConfiguration.html">CMemCacheServerConfiguration</a></td>
  <td>CMemCacheServerConfiguration represents the configuration data for a single memcache server.</td>
</tr>
<tr>
  <td><a href="CWinCache.html">CWinCache</a></td>
  <td>CWinCache implements a cache application component based on <a href="http://www.iis.net/expand/wincacheforphp">WinCache</a>.</td>
</tr>
<tr>
  <td><a href="CXCache.html">CXCache</a></td>
  <td>CXCache implements a cache application module based on <a href="http://xcache.lighttpd.net/">xcache</a>.</td>
</tr>
<tr>
  <td><a href="CZendDataCache.html">CZendDataCache</a></td>
  <td>CZendDataCache implements a cache application module based on the Zend Data Cache</td>
</tr>
<tr>
  <td><a href="ICache.html">ICache</a></td>
  <td>ICache is the interface that must be implemented by cache components.</td>
</tr>
<tr>
  <td><a href="ICacheDependency.html">ICacheDependency</a></td>
  <td>ICacheDependency is the interface that must be implemented by cache dependency classes.</td>
</tr>
<tr>
  <td rowspan="7"><a name="system.caching.dependencies"></a>system.caching.dependencies</td>
  <td><a href="CCacheDependency.html">CCacheDependency</a></td>
  <td>CCacheDependency is the base class for cache dependency classes.</td>
</tr>
<tr>
  <td><a href="CChainedCacheDependency.html">CChainedCacheDependency</a></td>
  <td>CChainedCacheDependency represents a list of cache dependencies.</td>
</tr>
<tr>
  <td><a href="CDbCacheDependency.html">CDbCacheDependency</a></td>
  <td>CDbCacheDependency represents a dependency based on the query result of a SQL statement.</td>
</tr>
<tr>
  <td><a href="CDirectoryCacheDependency.html">CDirectoryCacheDependency</a></td>
  <td>CDirectoryCacheDependency represents a dependency based on change of a directory.</td>
</tr>
<tr>
  <td><a href="CExpressionDependency.html">CExpressionDependency</a></td>
  <td>CExpressionDependency represents a dependency based on the result of a PHP expression.</td>
</tr>
<tr>
  <td><a href="CFileCacheDependency.html">CFileCacheDependency</a></td>
  <td>CFileCacheDependency represents a dependency based on a file's last modification time.</td>
</tr>
<tr>
  <td><a href="CGlobalStateCacheDependency.html">CGlobalStateCacheDependency</a></td>
  <td>CGlobalStateCacheDependency represents a dependency based on a global state value.</td>
</tr>
<tr>
  <td rowspan="12"><a name="system.collections"></a>system.collections</td>
  <td><a href="CAttributeCollection.html">CAttributeCollection</a></td>
  <td>CAttributeCollection implements a collection for storing attribute names and values.</td>
</tr>
<tr>
  <td><a href="CConfiguration.html">CConfiguration</a></td>
  <td>CConfiguration represents an array-based configuration.</td>
</tr>
<tr>
  <td><a href="CList.html">CList</a></td>
  <td>CList implements an integer-indexed collection class.</td>
</tr>
<tr>
  <td><a href="CListIterator.html">CListIterator</a></td>
  <td>CListIterator implements an interator for <a href="CList.html">CList</a>.</td>
</tr>
<tr>
  <td><a href="CMap.html">CMap</a></td>
  <td>CMap implements a collection that takes key-value pairs.</td>
</tr>
<tr>
  <td><a href="CMapIterator.html">CMapIterator</a></td>
  <td>CMapIterator implements an interator for <a href="CMap.html">CMap</a>.</td>
</tr>
<tr>
  <td><a href="CQueue.html">CQueue</a></td>
  <td>CQueue implements a queue.</td>
</tr>
<tr>
  <td><a href="CQueueIterator.html">CQueueIterator</a></td>
  <td>CQueueIterator implements an interator for <a href="CQueue.html">CQueue</a>.</td>
</tr>
<tr>
  <td><a href="CStack.html">CStack</a></td>
  <td>CStack implements a stack.</td>
</tr>
<tr>
  <td><a href="CStackIterator.html">CStackIterator</a></td>
  <td>CStackIterator implements an interator for <a href="CStack.html">CStack</a>.</td>
</tr>
<tr>
  <td><a href="CTypedList.html">CTypedList</a></td>
  <td>CTypedList represents a list whose items are of the certain type.</td>
</tr>
<tr>
  <td><a href="CTypedMap.html">CTypedMap</a></td>
  <td>CTypedMap represents a map whose items are of the certain type.</td>
</tr>
<tr>
  <td rowspan="4"><a name="system.console"></a>system.console</td>
  <td><a href="CConsoleApplication.html">CConsoleApplication</a></td>
  <td>CConsoleApplication represents a console application.</td>
</tr>
<tr>
  <td><a href="CConsoleCommand.html">CConsoleCommand</a></td>
  <td>CConsoleCommand represents an executable console command.</td>
</tr>
<tr>
  <td><a href="CConsoleCommandRunner.html">CConsoleCommandRunner</a></td>
  <td>CConsoleCommandRunner manages commands and executes the requested command.</td>
</tr>
<tr>
  <td><a href="CHelpCommand.html">CHelpCommand</a></td>
  <td>CHelpCommand represents a console help command.</td>
</tr>
<tr>
  <td rowspan="6"><a name="system.db"></a>system.db</td>
  <td><a href="CDbCommand.html">CDbCommand</a></td>
  <td>CDbCommand represents an SQL statement to execute against a database.</td>
</tr>
<tr>
  <td><a href="CDbConnection.html">CDbConnection</a></td>
  <td>CDbConnection represents a connection to a database.</td>
</tr>
<tr>
  <td><a href="CDbDataReader.html">CDbDataReader</a></td>
  <td>CDbDataReader represents a forward-only stream of rows from a query result set.</td>
</tr>
<tr>
  <td><a href="CDbException.html">CDbException</a></td>
  <td>CDbException represents an exception that is caused by some DB-related operations.</td>
</tr>
<tr>
  <td><a href="CDbMigration.html">CDbMigration</a></td>
  <td>CDbMigration is the base class for representing a database migration.</td>
</tr>
<tr>
  <td><a href="CDbTransaction.html">CDbTransaction</a></td>
  <td>CDbTransaction represents a DB transaction.</td>
</tr>
<tr>
  <td rowspan="14"><a name="system.db.ar"></a>system.db.ar</td>
  <td><a href="CActiveFinder.html">CActiveFinder</a></td>
  <td>CActiveFinder implements eager loading and lazy loading of related active records.</td>
</tr>
<tr>
  <td><a href="CActiveRecord.html">CActiveRecord</a></td>
  <td>CActiveRecord is the base class for classes representing relational data.</td>
</tr>
<tr>
  <td><a href="CActiveRecordBehavior.html">CActiveRecordBehavior</a></td>
  <td>CActiveRecordBehavior is the base class for behaviors that can be attached to <a href="CActiveRecord.html">CActiveRecord</a>.</td>
</tr>
<tr>
  <td><a href="CActiveRecordMetaData.html">CActiveRecordMetaData</a></td>
  <td>CActiveRecordMetaData represents the meta-data for an Active Record class.</td>
</tr>
<tr>
  <td><a href="CActiveRelation.html">CActiveRelation</a></td>
  <td>CActiveRelation is the base class for representing active relations that bring back related objects.</td>
</tr>
<tr>
  <td><a href="CBaseActiveRelation.html">CBaseActiveRelation</a></td>
  <td>CBaseActiveRelation is the base class for all active relations.</td>
</tr>
<tr>
  <td><a href="CBelongsToRelation.html">CBelongsToRelation</a></td>
  <td>CBelongsToRelation represents the parameters specifying a BELONGS_TO relation.</td>
</tr>
<tr>
  <td><a href="CHasManyRelation.html">CHasManyRelation</a></td>
  <td>CHasManyRelation represents the parameters specifying a HAS_MANY relation.</td>
</tr>
<tr>
  <td><a href="CHasOneRelation.html">CHasOneRelation</a></td>
  <td>CHasOneRelation represents the parameters specifying a HAS_ONE relation.</td>
</tr>
<tr>
  <td><a href="CJoinElement.html">CJoinElement</a></td>
  <td>CJoinElement represents a tree node in the join tree created by <a href="CActiveFinder.html">CActiveFinder</a>.</td>
</tr>
<tr>
  <td><a href="CJoinQuery.html">CJoinQuery</a></td>
  <td>CJoinQuery represents a JOIN SQL statement.</td>
</tr>
<tr>
  <td><a href="CManyManyRelation.html">CManyManyRelation</a></td>
  <td>CManyManyRelation represents the parameters specifying a MANY_MANY relation.</td>
</tr>
<tr>
  <td><a href="CStatElement.html">CStatElement</a></td>
  <td>CStatElement represents STAT join element for <a href="CActiveFinder.html">CActiveFinder</a>.</td>
</tr>
<tr>
  <td><a href="CStatRelation.html">CStatRelation</a></td>
  <td>CStatRelation represents a statistical relational query.</td>
</tr>
<tr>
  <td rowspan="6"><a name="system.db.schema"></a>system.db.schema</td>
  <td><a href="CDbColumnSchema.html">CDbColumnSchema</a></td>
  <td>CDbColumnSchema class describes the column meta data of a database table.</td>
</tr>
<tr>
  <td><a href="CDbCommandBuilder.html">CDbCommandBuilder</a></td>
  <td>CDbCommandBuilder provides basic methods to create query commands for tables.</td>
</tr>
<tr>
  <td><a href="CDbCriteria.html">CDbCriteria</a></td>
  <td>CDbCriteria represents a query criteria, such as conditions, ordering by, limit/offset.</td>
</tr>
<tr>
  <td><a href="CDbExpression.html">CDbExpression</a></td>
  <td>CDbExpression represents a DB expression that does not need escaping.</td>
</tr>
<tr>
  <td><a href="CDbSchema.html">CDbSchema</a></td>
  <td>CDbSchema is the base class for retrieving metadata information.</td>
</tr>
<tr>
  <td><a href="CDbTableSchema.html">CDbTableSchema</a></td>
  <td>CDbTableSchema is the base class for representing the metadata of a database table.</td>
</tr>
<tr>
  <td rowspan="5"><a name="system.db.schema.mssql"></a>system.db.schema.mssql</td>
  <td><a href="CMssqlColumnSchema.html">CMssqlColumnSchema</a></td>
  <td>CMssqlColumnSchema class describes the column meta data of a MSSQL table.</td>
</tr>
<tr>
  <td><a href="CMssqlCommandBuilder.html">CMssqlCommandBuilder</a></td>
  <td>CMssqlCommandBuilder provides basic methods to create query commands for tables for Mssql Servers.</td>
</tr>
<tr>
  <td><a href="CMssqlPdoAdapter.html">CMssqlPdoAdapter</a></td>
  <td>This is an extension of default PDO class for mssql driver only</td>
</tr>
<tr>
  <td><a href="CMssqlSchema.html">CMssqlSchema</a></td>
  <td>CMssqlSchema is the class for retrieving metadata information from a MS SQL Server database.</td>
</tr>
<tr>
  <td><a href="CMssqlTableSchema.html">CMssqlTableSchema</a></td>
  <td>CMssqlTableSchema represents the metadata for a MSSQL table.</td>
</tr>
<tr>
  <td rowspan="3"><a name="system.db.schema.mysql"></a>system.db.schema.mysql</td>
  <td><a href="CMysqlColumnSchema.html">CMysqlColumnSchema</a></td>
  <td>CMysqlColumnSchema class describes the column meta data of a MySQL table.</td>
</tr>
<tr>
  <td><a href="CMysqlSchema.html">CMysqlSchema</a></td>
  <td>CMysqlSchema is the class for retrieving metadata information from a MySQL database (version 4.1.x and 5.x).</td>
</tr>
<tr>
  <td><a href="CMysqlTableSchema.html">CMysqlTableSchema</a></td>
  <td>CMysqlTableSchema represents the metadata for a MySQL table.</td>
</tr>
<tr>
  <td rowspan="4"><a name="system.db.schema.oci"></a>system.db.schema.oci</td>
  <td><a href="COciColumnSchema.html">COciColumnSchema</a></td>
  <td>COciColumnSchema class describes the column meta data of a Oracle table.</td>
</tr>
<tr>
  <td><a href="COciCommandBuilder.html">COciCommandBuilder</a></td>
  <td>COciCommandBuilder provides basic methods to create query commands for tables.</td>
</tr>
<tr>
  <td><a href="COciSchema.html">COciSchema</a></td>
  <td>COciSchema is the class for retrieving metadata information from an Oracle database.</td>
</tr>
<tr>
  <td><a href="COciTableSchema.html">COciTableSchema</a></td>
  <td>COciTableSchema represents the metadata for a Oracle table.</td>
</tr>
<tr>
  <td rowspan="3"><a name="system.db.schema.pgsql"></a>system.db.schema.pgsql</td>
  <td><a href="CPgsqlColumnSchema.html">CPgsqlColumnSchema</a></td>
  <td>CPgsqlColumnSchema class describes the column meta data of a PostgreSQL table.</td>
</tr>
<tr>
  <td><a href="CPgsqlSchema.html">CPgsqlSchema</a></td>
  <td>CPgsqlSchema is the class for retrieving metadata information from a PostgreSQL database.</td>
</tr>
<tr>
  <td><a href="CPgsqlTableSchema.html">CPgsqlTableSchema</a></td>
  <td>CPgsqlTable represents the metadata for a PostgreSQL table.</td>
</tr>
<tr>
  <td rowspan="3"><a name="system.db.schema.sqlite"></a>system.db.schema.sqlite</td>
  <td><a href="CSqliteColumnSchema.html">CSqliteColumnSchema</a></td>
  <td>CSqliteColumnSchema class describes the column meta data of a SQLite table.</td>
</tr>
<tr>
  <td><a href="CSqliteCommandBuilder.html">CSqliteCommandBuilder</a></td>
  <td>CSqliteCommandBuilder provides basic methods to create query commands for SQLite tables.</td>
</tr>
<tr>
  <td><a href="CSqliteSchema.html">CSqliteSchema</a></td>
  <td>CSqliteSchema is the class for retrieving metadata information from a SQLite (2/3) database.</td>
</tr>
<tr>
  <td rowspan="5"><a name="system.gii"></a>system.gii</td>
  <td><a href="CCodeFile.html">CCodeFile</a></td>
  <td>CCodeFile represents a code file being generated.</td>
</tr>
<tr>
  <td><a href="CCodeForm.html">CCodeForm</a></td>
  <td>CCodeForm represents the form for collecting code generation parameters.</td>
</tr>
<tr>
  <td><a href="CCodeGenerator.html">CCodeGenerator</a></td>
  <td>CCodeGenerator is the base class for code generator classes.</td>
</tr>
<tr>
  <td><a href="CCodeModel.html">CCodeModel</a></td>
  <td>CCodeModel is the base class for model classes that are used to generate code.</td>
</tr>
<tr>
  <td><a href="GiiModule.html">GiiModule</a></td>
  <td>GiiModule is a module that provides Web-based code generation capabilities.</td>
</tr>
<tr>
  <td rowspan="9"><a name="system.i18n"></a>system.i18n</td>
  <td><a href="CChoiceFormat.html">CChoiceFormat</a></td>
  <td>CChoiceFormat is a helper that chooses an appropriate message based on the specified number value.</td>
</tr>
<tr>
  <td><a href="CDateFormatter.html">CDateFormatter</a></td>
  <td>CDateFormatter provides date/time localization functionalities.</td>
</tr>
<tr>
  <td><a href="CDbMessageSource.html">CDbMessageSource</a></td>
  <td>CDbMessageSource represents a message source that stores translated messages in database.</td>
</tr>
<tr>
  <td><a href="CGettextMessageSource.html">CGettextMessageSource</a></td>
  <td>CGettextMessageSource represents a message source that is based on GNU Gettext.</td>
</tr>
<tr>
  <td><a href="CLocale.html">CLocale</a></td>
  <td>CLocale represents the data relevant to a locale.</td>
</tr>
<tr>
  <td><a href="CMessageSource.html">CMessageSource</a></td>
  <td>CMessageSource is the base class for message translation repository classes.</td>
</tr>
<tr>
  <td><a href="CMissingTranslationEvent.html">CMissingTranslationEvent</a></td>
  <td>CMissingTranslationEvent represents the parameter for the <a href="CMessageSource.html#onMissingTranslation">onMissingTranslation</a> event.</td>
</tr>
<tr>
  <td><a href="CNumberFormatter.html">CNumberFormatter</a></td>
  <td>CNumberFormatter provides number localization functionalities.</td>
</tr>
<tr>
  <td><a href="CPhpMessageSource.html">CPhpMessageSource</a></td>
  <td>CPhpMessageSource represents a message source that stores translated messages in PHP scripts.</td>
</tr>
<tr>
  <td rowspan="3"><a name="system.i18n.gettext"></a>system.i18n.gettext</td>
  <td><a href="CGettextFile.html">CGettextFile</a></td>
  <td>CGettextFile is the base class for representing a Gettext message file.</td>
</tr>
<tr>
  <td><a href="CGettextMoFile.html">CGettextMoFile</a></td>
  <td>CGettextMoFile represents an MO Gettext message file.</td>
</tr>
<tr>
  <td><a href="CGettextPoFile.html">CGettextPoFile</a></td>
  <td>CGettextPoFile represents a PO Gettext message file.</td>
</tr>
<tr>
  <td rowspan="9"><a name="system.logging"></a>system.logging</td>
  <td><a href="CDbLogRoute.html">CDbLogRoute</a></td>
  <td>CDbLogRoute stores log messages in a database table.</td>
</tr>
<tr>
  <td><a href="CEmailLogRoute.html">CEmailLogRoute</a></td>
  <td>CEmailLogRoute sends selected log messages to email addresses.</td>
</tr>
<tr>
  <td><a href="CFileLogRoute.html">CFileLogRoute</a></td>
  <td>CFileLogRoute records log messages in files.</td>
</tr>
<tr>
  <td><a href="CLogFilter.html">CLogFilter</a></td>
  <td>CLogFilter preprocesses the logged messages before they are handled by a log route.</td>
</tr>
<tr>
  <td><a href="CLogRoute.html">CLogRoute</a></td>
  <td>CLogRoute is the base class for all log route classes.</td>
</tr>
<tr>
  <td><a href="CLogRouter.html">CLogRouter</a></td>
  <td>CLogRouter manages log routes that record log messages in different media.</td>
</tr>
<tr>
  <td><a href="CLogger.html">CLogger</a></td>
  <td>CLogger records log messages in memory.</td>
</tr>
<tr>
  <td><a href="CProfileLogRoute.html">CProfileLogRoute</a></td>
  <td>CProfileLogRoute displays the profiling results in Web page.</td>
</tr>
<tr>
  <td><a href="CWebLogRoute.html">CWebLogRoute</a></td>
  <td>CWebLogRoute shows the log content in Web page.</td>
</tr>
<tr>
  <td rowspan="4"><a name="system.test"></a>system.test</td>
  <td><a href="CDbFixtureManager.html">CDbFixtureManager</a></td>
  <td>CDbFixtureManager manages database fixtures during tests.</td>
</tr>
<tr>
  <td><a href="CDbTestCase.html">CDbTestCase</a></td>
  <td>CDbTestCase is the base class for test cases about DB-related features.</td>
</tr>
<tr>
  <td><a href="CTestCase.html">CTestCase</a></td>
  <td>CTestCase is the base class for all test case classes.</td>
</tr>
<tr>
  <td><a href="CWebTestCase.html">CWebTestCase</a></td>
  <td>CWebTestCase is the base class for Web-based functional test case classes.</td>
</tr>
<tr>
  <td rowspan="7"><a name="system.utils"></a>system.utils</td>
  <td><a href="CDateTimeParser.html">CDateTimeParser</a></td>
  <td>CDateTimeParser converts a date/time string to a UNIX timestamp according to the specified pattern.</td>
</tr>
<tr>
  <td><a href="CFileHelper.html">CFileHelper</a></td>
  <td>CFileHelper provides a set of helper methods for common file system operations.</td>
</tr>
<tr>
  <td><a href="CFormatter.html">CFormatter</a></td>
  <td>CFormatter provides a set of commonly used data formatting methods.</td>
</tr>
<tr>
  <td><a href="CMarkdownParser.html">CMarkdownParser</a></td>
  <td>CMarkdownParser is a wrapper of <a href="http://michelf.com/projects/php-markdown/extra/">MarkdownExtra_Parser</a>.</td>
</tr>
<tr>
  <td><a href="CPropertyValue.html">CPropertyValue</a></td>
  <td>CPropertyValue is a helper class that provides static methods to convert component property values to specific types.</td>
</tr>
<tr>
  <td><a href="CTimestamp.html">CTimestamp</a></td>
  <td>CTimestamp represents a timestamp.</td>
</tr>
<tr>
  <td><a href="CVarDumper.html">CVarDumper</a></td>
  <td>CVarDumper is intended to replace the buggy PHP function var_dump and print_r.</td>
</tr>
<tr>
  <td rowspan="20"><a name="system.validators"></a>system.validators</td>
  <td><a href="CBooleanValidator.html">CBooleanValidator</a></td>
  <td>CBooleanValidator validates that the attribute value is either <a href="CBooleanValidator.html#trueValue">trueValue</a>  or <a href="CBooleanValidator.html#falseValue">falseValue</a>.</td>
</tr>
<tr>
  <td><a href="CCaptchaValidator.html">CCaptchaValidator</a></td>
  <td>CCaptchaValidator validates that the attribute value is the same as the verification code displayed in the CAPTCHA.</td>
</tr>
<tr>
  <td><a href="CCompareValidator.html">CCompareValidator</a></td>
  <td>CCompareValidator compares the specified attribute value with another value and validates if they are equal.</td>
</tr>
<tr>
  <td><a href="CDefaultValueValidator.html">CDefaultValueValidator</a></td>
  <td>CDefaultValueValidator sets the attributes with the specified value.</td>
</tr>
<tr>
  <td><a href="CEmailValidator.html">CEmailValidator</a></td>
  <td>CEmailValidator validates that the attribute value is a valid email address.</td>
</tr>
<tr>
  <td><a href="CExistValidator.html">CExistValidator</a></td>
  <td>CExistValidator validates that the attribute value exists in a table.</td>
</tr>
<tr>
  <td><a href="CFileValidator.html">CFileValidator</a></td>
  <td>CFileValidator verifies if an attribute is receiving a valid uploaded file.</td>
</tr>
<tr>
  <td><a href="CFilterValidator.html">CFilterValidator</a></td>
  <td>CFilterValidator transforms the data being validated based on a filter.</td>
</tr>
<tr>
  <td><a href="CInlineValidator.html">CInlineValidator</a></td>
  <td>CInlineValidator represents a validator which is defined as a method in the object being validated.</td>
</tr>
<tr>
  <td><a href="CNumberValidator.html">CNumberValidator</a></td>
  <td>CNumberValidator validates that the attribute value is a number.</td>
</tr>
<tr>
  <td><a href="CRangeValidator.html">CRangeValidator</a></td>
  <td>CRangeValidator validates that the attribute value is among the list (specified via <a href="CRangeValidator.html#range">range</a>).</td>
</tr>
<tr>
  <td><a href="CRegularExpressionValidator.html">CRegularExpressionValidator</a></td>
  <td>CRegularExpressionValidator validates that the attribute value matches to the specified <a href="CRegularExpressionValidator.html#pattern">regular expression</a>.</td>
</tr>
<tr>
  <td><a href="CRequiredValidator.html">CRequiredValidator</a></td>
  <td>CRequiredValidator validates that the specified attribute does not have null or empty value.</td>
</tr>
<tr>
  <td><a href="CSafeValidator.html">CSafeValidator</a></td>
  <td>CSafeValidator marks the associated attributes to be safe for massive assignments.</td>
</tr>
<tr>
  <td><a href="CStringValidator.html">CStringValidator</a></td>
  <td>CStringValidator validates that the attribute value is of certain length.</td>
</tr>
<tr>
  <td><a href="CTypeValidator.html">CTypeValidator</a></td>
  <td>CTypeValidator verifies if the attribute is of the type specified by <a href="CTypeValidator.html#type">type</a>.</td>
</tr>
<tr>
  <td><a href="CUniqueValidator.html">CUniqueValidator</a></td>
  <td>CUniqueValidator validates that the attribute value is unique in the corresponding database table.</td>
</tr>
<tr>
  <td><a href="CUnsafeValidator.html">CUnsafeValidator</a></td>
  <td>CUnsafeValidator marks the associated attributes to be unsafe so that they cannot be massively assigned.</td>
</tr>
<tr>
  <td><a href="CUrlValidator.html">CUrlValidator</a></td>
  <td>CUrlValidator validates that the attribute value is a valid http or https URL.</td>
</tr>
<tr>
  <td><a href="CValidator.html">CValidator</a></td>
  <td>CValidator is the base class for all validators.</td>
</tr>
<tr>
  <td rowspan="30"><a name="system.web"></a>system.web</td>
  <td><a href="CActiveDataProvider.html">CActiveDataProvider</a></td>
  <td>CActiveDataProvider implements a data provider based on ActiveRecord.</td>
</tr>
<tr>
  <td><a href="CArrayDataProvider.html">CArrayDataProvider</a></td>
  <td>CArrayDataProvider implements a data provider based on a raw data array.</td>
</tr>
<tr>
  <td><a href="CAssetManager.html">CAssetManager</a></td>
  <td>CAssetManager is a Web application component that manages private files (called assets) and makes them accessible by Web clients.</td>
</tr>
<tr>
  <td><a href="CBaseController.html">CBaseController</a></td>
  <td>CBaseController is the base class for <a href="CController.html">CController</a> and <a href="CWidget.html">CWidget</a>.</td>
</tr>
<tr>
  <td><a href="CCacheHttpSession.html">CCacheHttpSession</a></td>
  <td>CCacheHttpSession implements a session component using cache as storage medium.</td>
</tr>
<tr>
  <td><a href="CClientScript.html">CClientScript</a></td>
  <td>CClientScript manages JavaScript and CSS stylesheets for views.</td>
</tr>
<tr>
  <td><a href="CController.html">CController</a></td>
  <td>CController manages a set of actions which deal with the corresponding user requests.</td>
</tr>
<tr>
  <td><a href="CCookieCollection.html">CCookieCollection</a></td>
  <td>CCookieCollection implements a collection class to store cookies.</td>
</tr>
<tr>
  <td><a href="CDataProvider.html">CDataProvider</a></td>
  <td>CDataProvider is a base class that implements the <a href="IDataProvider.html">IDataProvider</a> interface.</td>
</tr>
<tr>
  <td><a href="CDbHttpSession.html">CDbHttpSession</a></td>
  <td>CDbHttpSession extends <a href="CHttpSession.html">CHttpSession</a> by using database as session data storage.</td>
</tr>
<tr>
  <td><a href="CExtController.html">CExtController</a></td>
  <td>CExtController is the base class for controllers distributed as extension.</td>
</tr>
<tr>
  <td><a href="CFormModel.html">CFormModel</a></td>
  <td>CFormModel represents a data model that collects HTML form inputs.</td>
</tr>
<tr>
  <td><a href="CHttpCookie.html">CHttpCookie</a></td>
  <td>A CHttpCookie instance stores a single cookie, including the cookie name, value, domain, path, expire, and secure.</td>
</tr>
<tr>
  <td><a href="CHttpRequest.html">CHttpRequest</a></td>
  <td>CHttpRequest encapsulates the $_SERVER variable and resolves its inconsistency among different Web servers.</td>
</tr>
<tr>
  <td><a href="CHttpSession.html">CHttpSession</a></td>
  <td>CHttpSession provides session-level data management and the related configurations.</td>
</tr>
<tr>
  <td><a href="CHttpSessionIterator.html">CHttpSessionIterator</a></td>
  <td>CHttpSessionIterator implements an interator for <a href="CHttpSession.html">CHttpSession</a>.</td>
</tr>
<tr>
  <td><a href="COutputEvent.html">COutputEvent</a></td>
  <td>COutputEvent represents the parameter for events related with output handling.</td>
</tr>
<tr>
  <td><a href="CPagination.html">CPagination</a></td>
  <td>CPagination represents information relevant to pagination.</td>
</tr>
<tr>
  <td><a href="CSort.html">CSort</a></td>
  <td>CSort represents information relevant to sorting.</td>
</tr>
<tr>
  <td><a href="CSqlDataProvider.html">CSqlDataProvider</a></td>
  <td>CSqlDataProvider implements a data provider based on a plain SQL statement.</td>
</tr>
<tr>
  <td><a href="CTheme.html">CTheme</a></td>
  <td>CTheme represents an application theme.</td>
</tr>
<tr>
  <td><a href="CThemeManager.html">CThemeManager</a></td>
  <td>CThemeManager manages the themes for the Web application.</td>
</tr>
<tr>
  <td><a href="CUploadedFile.html">CUploadedFile</a></td>
  <td>CUploadedFile represents the information for an uploaded file.</td>
</tr>
<tr>
  <td><a href="CUrlManager.html">CUrlManager</a></td>
  <td>CUrlManager manages the URLs of Yii Web applications.</td>
</tr>
<tr>
  <td><a href="CUrlRule.html">CUrlRule</a></td>
  <td>CUrlRule represents a URL formatting/parsing rule.</td>
</tr>
<tr>
  <td><a href="CWebApplication.html">CWebApplication</a></td>
  <td>CWebApplication extends CApplication by providing functionalities specific to Web requests.</td>
</tr>
<tr>
  <td><a href="CWebModule.html">CWebModule</a></td>
  <td>CWebModule represents an application module.</td>
</tr>
<tr>
  <td><a href="CWidgetFactory.html">CWidgetFactory</a></td>
  <td>CWidgetFactory creates new widgets to be used in views.</td>
</tr>
<tr>
  <td><a href="IDataProvider.html">IDataProvider</a></td>
  <td>IDataProvider is the interface that must be implemented by data provider classes.</td>
</tr>
<tr>
  <td><a href="IWidgetFactory.html">IWidgetFactory</a></td>
  <td>IWidgetFactory is the interface that must be implemented by a widget factory class.</td>
</tr>
<tr>
  <td rowspan="3"><a name="system.web.actions"></a>system.web.actions</td>
  <td><a href="CAction.html">CAction</a></td>
  <td>CAction is the base class for all controller action classes.</td>
</tr>
<tr>
  <td><a href="CInlineAction.html">CInlineAction</a></td>
  <td>CInlineAction represents an action that is defined as a controller method.</td>
</tr>
<tr>
  <td><a href="CViewAction.html">CViewAction</a></td>
  <td>CViewAction represents an action that displays a view according to a user-specified parameter.</td>
</tr>
<tr>
  <td rowspan="10"><a name="system.web.auth"></a>system.web.auth</td>
  <td><a href="CAccessControlFilter.html">CAccessControlFilter</a></td>
  <td>CAccessControlFilter performs authorization checks for the specified actions.</td>
</tr>
<tr>
  <td><a href="CAccessRule.html">CAccessRule</a></td>
  <td>CAccessRule represents an access rule that is managed by <a href="CAccessControlFilter.html">CAccessControlFilter</a>.</td>
</tr>
<tr>
  <td><a href="CAuthAssignment.html">CAuthAssignment</a></td>
  <td>CAuthAssignment represents an assignment of a role to a user.</td>
</tr>
<tr>
  <td><a href="CAuthItem.html">CAuthItem</a></td>
  <td>CAuthItem represents an authorization item.</td>
</tr>
<tr>
  <td><a href="CAuthManager.html">CAuthManager</a></td>
  <td>CAuthManager is the base class for authorization manager classes.</td>
</tr>
<tr>
  <td><a href="CBaseUserIdentity.html">CBaseUserIdentity</a></td>
  <td>CBaseUserIdentity is a base class implementing <a href="IUserIdentity.html">IUserIdentity</a>.</td>
</tr>
<tr>
  <td><a href="CDbAuthManager.html">CDbAuthManager</a></td>
  <td>CDbAuthManager represents an authorization manager that stores authorization information in database.</td>
</tr>
<tr>
  <td><a href="CPhpAuthManager.html">CPhpAuthManager</a></td>
  <td>CPhpAuthManager represents an authorization manager that stores authorization information in terms of a PHP script file.</td>
</tr>
<tr>
  <td><a href="CUserIdentity.html">CUserIdentity</a></td>
  <td>CUserIdentity is a base class for representing identities that are authenticated based on a username and a password.</td>
</tr>
<tr>
  <td><a href="CWebUser.html">CWebUser</a></td>
  <td>CWebUser represents the persistent state for a Web application user.</td>
</tr>
<tr>
  <td rowspan="3"><a name="system.web.filters"></a>system.web.filters</td>
  <td><a href="CFilter.html">CFilter</a></td>
  <td>CFilter is the base class for all filters.</td>
</tr>
<tr>
  <td><a href="CFilterChain.html">CFilterChain</a></td>
  <td>CFilterChain represents a list of filters being applied to an action.</td>
</tr>
<tr>
  <td><a href="CInlineFilter.html">CInlineFilter</a></td>
  <td>CInlineFilter represents a filter defined as a controller method.</td>
</tr>
<tr>
  <td rowspan="6"><a name="system.web.form"></a>system.web.form</td>
  <td><a href="CForm.html">CForm</a></td>
  <td>CForm represents a form object that contains form input specifications.</td>
</tr>
<tr>
  <td><a href="CFormButtonElement.html">CFormButtonElement</a></td>
  <td>CFormButtonElement represents a form button element.</td>
</tr>
<tr>
  <td><a href="CFormElement.html">CFormElement</a></td>
  <td>CFormElement is the base class for presenting all kinds of form element.</td>
</tr>
<tr>
  <td><a href="CFormElementCollection.html">CFormElementCollection</a></td>
  <td>CFormElementCollection implements the collection for storing form elements.</td>
</tr>
<tr>
  <td><a href="CFormInputElement.html">CFormInputElement</a></td>
  <td>CFormInputElement represents form input element.</td>
</tr>
<tr>
  <td><a href="CFormStringElement.html">CFormStringElement</a></td>
  <td>CFormStringElement represents a string in a form.</td>
</tr>
<tr>
  <td rowspan="4"><a name="system.web.helpers"></a>system.web.helpers</td>
  <td><a href="CGoogleApi.html">CGoogleApi</a></td>
  <td>CGoogleApi provides helper methods to easily access <a href="http://code.google.com/apis/ajax/">Google AJAX APIs</a>.</td>
</tr>
<tr>
  <td><a href="CHtml.html">CHtml</a></td>
  <td>CHtml is a static class that provides a collection of helper methods for creating HTML views.</td>
</tr>
<tr>
  <td><a href="CJSON.html">CJSON</a></td>
  <td>CJSON converts PHP data to and from JSON format.</td>
</tr>
<tr>
  <td><a href="CJavaScript.html">CJavaScript</a></td>
  <td>CJavaScript is a helper class containing JavaScript-related handling functions.</td>
</tr>
<tr>
  <td rowspan="2"><a name="system.web.renderers"></a>system.web.renderers</td>
  <td><a href="CPradoViewRenderer.html">CPradoViewRenderer</a></td>
  <td>CPradoViewRenderer implements a view renderer that allows users to use a template syntax similar to PRADO templates.</td>
</tr>
<tr>
  <td><a href="CViewRenderer.html">CViewRenderer</a></td>
  <td>CViewRenderer is the base class for view renderer classes.</td>
</tr>
<tr>
  <td rowspan="4"><a name="system.web.services"></a>system.web.services</td>
  <td><a href="CSoapObjectWrapper.html">CSoapObjectWrapper</a></td>
  <td>CSoapObjectWrapper is a wrapper class internally used when SoapServer::setObject() is not defined.</td>
</tr>
<tr>
  <td><a href="CWebService.html">CWebService</a></td>
  <td>CWebService encapsulates SoapServer and provides a WSDL-based web service.</td>
</tr>
<tr>
  <td><a href="CWebServiceAction.html">CWebServiceAction</a></td>
  <td>CWebServiceAction implements an action that provides Web services.</td>
</tr>
<tr>
  <td><a href="CWsdlGenerator.html">CWsdlGenerator</a></td>
  <td>CWsdlGenerator generates the WSDL for a given service class.</td>
</tr>
<tr>
  <td rowspan="18"><a name="system.web.widgets"></a>system.web.widgets</td>
  <td><a href="CActiveForm.html">CActiveForm</a></td>
  <td>CActiveForm provides a set of methods that can facilitate creating a form associated with some data models.</td>
</tr>
<tr>
  <td><a href="CAutoComplete.html">CAutoComplete</a></td>
  <td>CAutoComplete generates an auto-complete text field.</td>
</tr>
<tr>
  <td><a href="CClipWidget.html">CClipWidget</a></td>
  <td>CClipWidget records its content and makes it available elsewhere.</td>
</tr>
<tr>
  <td><a href="CContentDecorator.html">CContentDecorator</a></td>
  <td>CContentDecorator decorates the content it encloses with the specified view.</td>
</tr>
<tr>
  <td><a href="CFilterWidget.html">CFilterWidget</a></td>
  <td>CFilterWidget is the base class for widgets that can also be used as filters.</td>
</tr>
<tr>
  <td><a href="CFlexWidget.html">CFlexWidget</a></td>
  <td>CFlexWidget embeds a Flex 3.x application into a page.</td>
</tr>
<tr>
  <td><a href="CHtmlPurifier.html">CHtmlPurifier</a></td>
  <td>CHtmlPurifier is wrapper of <a href="http://htmlpurifier.org">HTML Purifier</a>.</td>
</tr>
<tr>
  <td><a href="CInputWidget.html">CInputWidget</a></td>
  <td>CInputWidget is the base class for widgets that collect user inputs.</td>
</tr>
<tr>
  <td><a href="CMarkdown.html">CMarkdown</a></td>
  <td>CMarkdown converts the captured content from markdown syntax to HTML code.</td>
</tr>
<tr>
  <td><a href="CMaskedTextField.html">CMaskedTextField</a></td>
  <td>CMaskedTextField generates a masked text field.</td>
</tr>
<tr>
  <td><a href="CMultiFileUpload.html">CMultiFileUpload</a></td>
  <td>CMultiFileUpload generates a file input that can allow uploading multiple files at a time.</td>
</tr>
<tr>
  <td><a href="COutputCache.html">COutputCache</a></td>
  <td>COutputCache enables caching the output generated by an action or a view fragment.</td>
</tr>
<tr>
  <td><a href="COutputProcessor.html">COutputProcessor</a></td>
  <td>COutputProcessor transforms the content into a different format.</td>
</tr>
<tr>
  <td><a href="CStarRating.html">CStarRating</a></td>
  <td>CStarRating displays a star rating control that can collect user rating input.</td>
</tr>
<tr>
  <td><a href="CTabView.html">CTabView</a></td>
  <td>CTabView displays contents in multiple tabs.</td>
</tr>
<tr>
  <td><a href="CTextHighlighter.html">CTextHighlighter</a></td>
  <td>CTextHighlighter does syntax highlighting for its body content.</td>
</tr>
<tr>
  <td><a href="CTreeView.html">CTreeView</a></td>
  <td>CTreeView displays a tree view of hierarchical data.</td>
</tr>
<tr>
  <td><a href="CWidget.html">CWidget</a></td>
  <td>CWidget is the base class for widgets.</td>
</tr>
<tr>
  <td rowspan="2"><a name="system.web.widgets.captcha"></a>system.web.widgets.captcha</td>
  <td><a href="CCaptcha.html">CCaptcha</a></td>
  <td>CCaptcha renders a CAPTCHA image element.</td>
</tr>
<tr>
  <td><a href="CCaptchaAction.html">CCaptchaAction</a></td>
  <td>CCaptchaAction renders a CAPTCHA image.</td>
</tr>
<tr>
  <td rowspan="3"><a name="system.web.widgets.pagers"></a>system.web.widgets.pagers</td>
  <td><a href="CBasePager.html">CBasePager</a></td>
  <td>CBasePager is the base class for all pagers.</td>
</tr>
<tr>
  <td><a href="CLinkPager.html">CLinkPager</a></td>
  <td>CLinkPager displays a list of hyperlinks that lead to different pages of target.</td>
</tr>
<tr>
  <td><a href="CListPager.html">CListPager</a></td>
  <td>CListPager displays a dropdown list that contains options leading to different pages of target.</td>
</tr>
<tr>
  <td rowspan="1"><a name="zii.behaviors"></a>zii.behaviors</td>
  <td><a href="CTimestampBehavior.html">CTimestampBehavior</a></td>
  <td>CTimestampBehavior will automatically fill date and time related atributes.</td>
</tr>
<tr>
  <td rowspan="6"><a name="zii.widgets"></a>zii.widgets</td>
  <td><a href="CBaseListView.html">CBaseListView</a></td>
  <td>CBaseListView is the base class for <a href="CListView.html">CListView</a> and <a href="CGridView.html">CGridView</a>.</td>
</tr>
<tr>
  <td><a href="CBreadcrumbs.html">CBreadcrumbs</a></td>
  <td>CBreadcrumbs displays a list of links indicating the position of the current page in the whole website.</td>
</tr>
<tr>
  <td><a href="CDetailView.html">CDetailView</a></td>
  <td>CDetailView displays the detail of a single data model.</td>
</tr>
<tr>
  <td><a href="CListView.html">CListView</a></td>
  <td>CListView displays a list of data items in terms of a list.</td>
</tr>
<tr>
  <td><a href="CMenu.html">CMenu</a></td>
  <td>CMenu displays a multi-level menu using nested HTML lists.</td>
</tr>
<tr>
  <td><a href="CPortlet.html">CPortlet</a></td>
  <td>CPortlet is the base class for portlet widgets.</td>
</tr>
<tr>
  <td rowspan="6"><a name="zii.widgets.grid"></a>zii.widgets.grid</td>
  <td><a href="CButtonColumn.html">CButtonColumn</a></td>
  <td>CButtonColumn represents a grid view column that renders one or several buttons.</td>
</tr>
<tr>
  <td><a href="CCheckBoxColumn.html">CCheckBoxColumn</a></td>
  <td>CCheckBoxColumn represents a grid view column of checkboxes.</td>
</tr>
<tr>
  <td><a href="CDataColumn.html">CDataColumn</a></td>
  <td>CDataColumn represents a grid view column that is associated with a data attribute or expression.</td>
</tr>
<tr>
  <td><a href="CGridColumn.html">CGridColumn</a></td>
  <td>CGridColumn is the base class for all grid view column classes.</td>
</tr>
<tr>
  <td><a href="CGridView.html">CGridView</a></td>
  <td>CGridView displays a list of data items in terms of a table.</td>
</tr>
<tr>
  <td><a href="CLinkColumn.html">CLinkColumn</a></td>
  <td>CLinkColumn represents a grid view column that renders a hyperlink in each of its data cells.</td>
</tr>
<tr>
  <td rowspan="16"><a name="zii.widgets.jui"></a>zii.widgets.jui</td>
  <td><a href="CJuiAccordion.html">CJuiAccordion</a></td>
  <td>CJuiAccordion displays an accordion widget.</td>
</tr>
<tr>
  <td><a href="CJuiAutoComplete.html">CJuiAutoComplete</a></td>
  <td>CJuiAutoComplete displays an autocomplete field.</td>
</tr>
<tr>
  <td><a href="CJuiButton.html">CJuiButton</a></td>
  <td>CJuiButton displays a button widget.</td>
</tr>
<tr>
  <td><a href="CJuiDatePicker.html">CJuiDatePicker</a></td>
  <td>CJuiDatePicker displays a datepicker.</td>
</tr>
<tr>
  <td><a href="CJuiDialog.html">CJuiDialog</a></td>
  <td>CJuiDialog displays a dialog widget.</td>
</tr>
<tr>
  <td><a href="CJuiDraggable.html">CJuiDraggable</a></td>
  <td>CJuiDraggable displays a draggable widget.</td>
</tr>
<tr>
  <td><a href="CJuiDroppable.html">CJuiDroppable</a></td>
  <td>CJuiDroppable displays a droppable widget.</td>
</tr>
<tr>
  <td><a href="CJuiInputWidget.html">CJuiInputWidget</a></td>
  <td>CJuiInputWidget is the base class for JUI widgets that can collect user input.</td>
</tr>
<tr>
  <td><a href="CJuiProgressBar.html">CJuiProgressBar</a></td>
  <td>CJuiProgressBar displays a progress bar widget.</td>
</tr>
<tr>
  <td><a href="CJuiResizable.html">CJuiResizable</a></td>
  <td>CJuiResizable displays a resizable widget.</td>
</tr>
<tr>
  <td><a href="CJuiSelectable.html">CJuiSelectable</a></td>
  <td>CJuiSelectable displays an accordion widget.</td>
</tr>
<tr>
  <td><a href="CJuiSlider.html">CJuiSlider</a></td>
  <td>CJuiSlider displays a slider.</td>
</tr>
<tr>
  <td><a href="CJuiSliderInput.html">CJuiSliderInput</a></td>
  <td>CJuiSliderInput displays a slider. It can be used in forms and post its value.</td>
</tr>
<tr>
  <td><a href="CJuiSortable.html">CJuiSortable</a></td>
  <td>CJuiSortable displays an accordion widget.</td>
</tr>
<tr>
  <td><a href="CJuiTabs.html">CJuiTabs</a></td>
  <td>CJuiTabs displays a tabs widget.</td>
</tr>
<tr>
  <td><a href="CJuiWidget.html">CJuiWidget</a></td>
  <td>This is the base class for all JUI widget classes.</td>
</tr>
</table>
</div><!-- end of content -->

<div id="apiFooter">
Copyright &copy; 2008-2011 by <a href="http://www.yiisoft.com">Yii Software LLC</a><br/>
All Rights Reserved.<br/>
</div><!-- end of footer -->

<script type="text/javascript">
/*<![CDATA[*/
$("a.toggle").toggle(function(){
	$(this).text($(this).text().replace(/Hide/,'Show'));
	$(this).parents(".summary").find(".inherited").hide();
},function(){
	$(this).text($(this).text().replace(/Show/,'Hide'));
	$(this).parents(".summary").find(".inherited").show();
});
$(".sourceCode a.show").toggle(function(){
	$(this).text($(this).text().replace(/show/,'hide'));
	$(this).parents(".sourceCode").find("div.code").show();
},function(){
	$(this).text($(this).text().replace(/hide/,'show'));
	$(this).parents(".sourceCode").find("div.code").hide();
});
$("a.sourceLink").click(function(){
	$(this).attr('target','_blank');
});
/*]]>*/
</script>

</div><!-- end of page -->
</body>
</html>