$(function() {

	function getNbDaysOfDurationInSeconds(durationInSeconds) {
		return Math.floor(durationInSeconds / 86400);
	}
	function getNbHoursOfDurationInSeconds(durationInSeconds) {
		return Math.floor(durationInSeconds / 3600);
	}
	function getNbMinutesOfDurationInSeconds(durationInSeconds) {
		return Math.floor(durationInSeconds / 60);
	}
	function getNbHoursRemainingOfDurationInSeconds(durationInSeconds) {
		return getNbHoursOfDurationInSeconds(durationInSeconds % 86400);
	}
	function getNbMinutesRemainingOfDurationInSeconds(durationInSeconds) {
		return getNbMinutesOfDurationInSeconds(durationInSeconds % 3600);
	}
	function getNbSecondsRemainingOfDurationInSeconds(durationInSeconds) {
		return durationInSeconds % 60;
	}

	function getNextDayOfWeek(date, dayOfWeek) {
		let resultDate = new Date(date.getTime());
		resultDate.setDate(date.getDate() + (7 + dayOfWeek - date.getDay()) % 7);
		return resultDate;
	}

	function displayCountDown(duration) {
		$('.nb_days').text(getNbDaysOfDurationInSeconds(duration));
		$('.nb_hours').text(getNbHoursRemainingOfDurationInSeconds(duration));
		$('.nb_minutes').text(getNbMinutesRemainingOfDurationInSeconds(duration));
		$('.nb_seconds').text(getNbSecondsRemainingOfDurationInSeconds(duration));
	}

	function countBack() {
		let nowDate = new Date();
		//nowDate.setFullYear(2020, 9, 16);
		//nowDate.setHours(18, 0, 0);
		let nextFridayDate = getNextDayOfWeek(nowDate, 5);
		nextFridayDate.setHours(17, 0, 0);
		//console.log(nextFridayDate);
		//console.log(nowDate);
		//console.log(nowDate.getDay());

		if (nowDate.getDay() == 6 || nowDate.getDay() == 0 || nowDate.getTime() > nextFridayDate.getTime()) {
			$('.weekend_is_here').removeClass('hide');
			$('.countdown, .worker').addClass('hide');
		}
		else {
			$('.weekend_is_here').addClass('hide');
			$('.countdown, .worker').removeClass('hide');

			//dateDiff = new Date(nextFridayDate - nowDate);
			var duration = Math.floor((nextFridayDate.getTime() - nowDate.getTime()) / 1000);
			displayCountDown(duration);
		}

		setTimeout(countBack, 1000);
	}

	countBack();
});