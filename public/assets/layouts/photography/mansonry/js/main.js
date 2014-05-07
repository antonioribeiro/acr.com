if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage('resize', "*");
}
__bindToLinks();

// ---------------------------------

// http://masonry.desandro.com/masonry.pkgd.js added as external resource
// https://rawgithub.com/desandro/classie/master/classie.js added

var notifElem;

docReady( function() {

    var container = document.querySelector('.masonry');
    notifElem = document.querySelector('#notification');
    var msnry = new Masonry( container, {
        columnWidth: 60
    });

    msnry.on( 'layoutComplete', function( msnryInstance, laidOutItems ) {
        notify( 'Masonry layout completed on ' + laidOutItems.length + ' items' );
    });

    eventie.bind( container, 'click', function( event ) {
        // don't proceed if item was not clicked on
        if ( !classie.has( event.target, 'item' ) ) {
            return;
        }
        // change size of item via class
        classie.toggle( event.target, 'gigante' );
        // trigger layout
        msnry.layout();
    });

});

// -------------------------- timestamp -------------------------- //

function timeStamp() {
    var now = new Date();
    var min = now.getMinutes();
    min = min < 10 ? '0' + min : min;
    var seconds = now.getSeconds();
    seconds = seconds < 10 ? '0' + seconds : seconds;
    return [ now.getHours(), min, seconds ].join(':');
}

// ----- text helper ----- //

var docElem = document.documentElement;
var textSetter = docElem.textContent !== undefined ? 'textContent' : 'innerText';

function setText( elem, value ) {
    elem[ textSetter ] = value;
}

// -------------------------- notify -------------------------- //

var transitionProp = getStyleProperty('transition');

var notifyTimeout;
var hideTime = transitionProp ? 1000 : 1500;

function notify( message ) {
    message += ' at ' + timeStamp();
    setText( notifElem, message );

    if ( transitionProp ) {
        notifElem.style[ transitionProp ] = 'none';
    }
    notifElem.style.display = 'block';
    notifElem.style.opacity = '1';

    // hide the notification after a second
    if ( notifyTimeout ) {
        clearTimeout( notifyTimeout );
    }

    notifyTimeout = setTimeout( hideNotify, hideTime );
};

function hideNotify() {
    if ( transitionProp ) {
        notifElem.style[ transitionProp ] = 'opacity 1.0s';
        notifElem.style.opacity = '0';
    } else {
        notifElem.style.display = 'none';
    }
};
//@ sourceURL=pen.js
