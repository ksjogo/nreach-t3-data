define([
	'TYPO3/CMS/NreachT3Base/Nreach',
	'TYPO3/CMS/NreachT3Base/Remote',
], function(
	NreachUI,
	Remote
){
	return function (mountpoint) {
		new NreachUI.default(['Entities'], mountpoint, {}, Remote);
	};
})
