$('.moreButton').on('click', function(e) {
    e.preventDefault;
    $('.moreAbout').toggleClass('moreAbout-active');
    $('.changeAboutColor').toggleClass('changeAboutColor-active');
});
