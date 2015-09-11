// $.widget("ID_OF_WIDGET", [ARGUMENTS_THAT_MATCH_PROCESSOR->run()], CALLBACK_FUNCTION);
$.widget("example", ['arg1', 'arg2', 'optionalArg'], function(data) {
	alert("This happened after execution!");
});