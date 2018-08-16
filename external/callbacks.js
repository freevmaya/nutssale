function documentReady() {

}

function gaInit(data) {
}

function beforeSend(data) {
}

function afterSend(data) {
	extEvent('sendOrder', getHashes());
	if (!(data['utm'] && data['utm']['utm_content']) && !data['utm_content']) data['utm_content'] = HTTP_REFERER;
	$.post('serv/php/lead-collect.php',data);
}

function extEvent(event, data) {
	ya.reachGoal(event, null, null, data);
}