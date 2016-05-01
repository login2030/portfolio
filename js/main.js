$(function($) {
	var wrapperSkill = $('#wrapper_circles'),
		scill = wrapperSkill.find('.circle');
	
	// Формирование фильтров (кругляшков с названиями технологий)
	scill.each(function() {
		var $this = $(this);
		$this.css({ height: $this.css('width') });
	});
	
	// Скилы
	setKnobCircle($("#scill_1"), '#595B4F', '#F1642C');
	setKnobCircle($("#scill_2"), '#595B4F', '#109FDB');
	setKnobCircle($("#scill_3"), '#595B4F', '#FBBC05');
	setKnobCircle($("#scill_4"), '#595B4F', '#4F5B93');
	
	// Внедряем название технологии в счетчик скила
	var arrScill = ['html', 'css', 'js', 'php'];
	$('#my_skill').find('div').each(function(i) {
		var $this = $(this);
		$this.addClass('item_skill');
		$this.append('<div class="i_s i_s_' + i + '">' + arrScill[i] + '</div>');
	});
	
	// Конечно защита не ахти, но все же
	var email = 'loginov-solonitsyn@yandex.ru',
		tel = '+7 917 383 2987',
		contact = $('#contact');
	contact.find('.svg_email p').text(email);
	contact.find('.svg_tel').attr('href', 'tel:+79173832987');
	contact.find('.svg_tel p').text(tel);
	
	// Сетка работ
	var works = $('#works');
	if (works.length > 0) {
		works.find('img').load(function() {
			works.masonry({
				itemSelector: '.item_wrapper',
			});
		});
	}
});

function setKnobCircle($el, bgColor, fgColor) {
	$el.knob({
		readOnly : true,
		bgColor: bgColor,
		fgColor: fgColor,
		inputColor: fgColor,
		displayInput: false,
	});
}