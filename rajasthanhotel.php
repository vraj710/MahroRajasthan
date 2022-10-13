<?php
include "login1.php";
include "signin.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rajasthan Tourism</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="shortcut icon" href="hot-air-balloon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">
	
 	<link rel="stylesheet" type="text/css" href="https://jacoblett.github.io/bootstrap4-latest/bootstrap-4-latest.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://jacoblett.github.io/bootstrap4-latest/bootstrap-4-latest.min.js"></script>
	<script type="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


 <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>
    <link rel="stylesheet" type="text/css" href="raj.css">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Titan+One">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!---about us animation text-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<style type="text/css">
	* {
  box-sizing: border-box;
}

</style>
</head>
<body class="constraint-fluid">
	<img src="images\raj1.jpg" style="float:left;width: 150px;height: 100px;">
<div class="container-fluid highlightTextIn" style="height: 10px;background-color: 	#c9c4b5;padding: 50px 30px;">

  <a href="http://localhost/Mahro%20Rajasthan/login.php"  style="color: black"><i class="fas fa-user"></i></a>   
  <a href="#home" alt="HOME" style="color: black">Home</a>   
  <a href="#about" alt="ABOUT" style="color: black">About us</a>
  <a href="#services" alt="SERVICES" style="color: black">Services</a>
  <a href="#Gallery" alt="GALLERY" style="color: black">Gallery</a>
  <a href="#Dances" alt="FAMOUS DANCES OF RAJASTHAN" style="color: black">Famous Dances Of Rajasthan</a>
  <a href="#maps" alt="Maps" style="color: black">Maps</a>
  <a href="#contactform" alt="CONTACT FORM" style="color: black">Contact Form</a>
  <a href="#contactus" alt="CONTACT" style="color: black">Contact</a>     
</div>
<img src="images\raj.jpg" style="float: right;width: 100px;height: 100px;margin-top: -100px;">
	<script type="text/javascript">
	/*

Inspiration from:
https://tympanus.net/codrops/2013/08/06/creative-link-effects/

</script>
<!--

─────█─▄▀█──█▀▄─█───── 
────▐▌──────────▐▌──── 
────█▌▀▄──▄▄──▄▀▐█──── 
───▐██──▀▀──▀▀──██▌─── 
──▄████▄──▐▌──▄████▄──

-->
<div class="bod container-fluid">
<script type="text/javascript" class="fg" >
	;(function() {

	'use strict';
	
	// variables
	var DEBUG       = false;
	var points      = null;
	var constraints = null;
	var skins       = null;
	var kGravity    = 0.5;
	var kFriction   = 0.98;
	var base        = 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/222599/';

	Math.sign = Math.sign || function(x) {
		return x > 0 ? 1 : -1;
	};

	// main loop

	function run() {

		requestAnimationFrame(run);
		ctx.clearRect(0, 0, canvas.width, canvas.height);

		// dragging

		pointer.dragging();

		// static points

		scene.static();

		// draw scene

		ctx.save();
		var s = skins;
		while (s) s = s.draw();
		ctx.restore();

		// verlet integration

		var p = points;
		while (p) p = p.integrate();

		// cursor

		pointer.cursor();
		
		// solve constraints

		var c = constraints;
		while (c) c = c.solve();

		// show constraints and points

		if (DEBUG) {
			c = constraints;
			while (c) c = c.draw();
		}

	}

	// point 2D constructor

	function Point (x, y, radius, mass, gravity) {

		this.x        = canvas.width * 0.5 + x;
		this.y        = y;
		this.oldX     = this.x;
		this.oldY     = y;
		this.radius   = radius || 1;
		this.mass     = mass || 1.0;
		this.friction = kFriction;
		this.gravity  = gravity || kGravity;
		this.next     = null;
		points        = iterator.link (points, this);

	}

	// set position

	Point.prototype.position = function (x, y) {

		this.x = x;
		this.y = y;

	};

	// verlet integration
	
	Point.prototype.integrate = function () {

		var x       = this.x;
		var y       = this.y;
		this.x     += (this.x - this.oldX) * this.friction;
		this.y     += (this.y - this.oldY) * this.friction + this.gravity;
		this.oldX   = x;
		this.oldY   = y;

		// bottom + friction

		if (this.y > canvas.height - this.radius) {
			this.x = x;
			this.y = canvas.height - this.radius;
		}

		// cursor style
		
		if (!pointer.draggable) {
			var dx = this.x - pointer.x;
			var dy = this.y - pointer.y;
			if (Math.sqrt(dx * dx + dy * dy) < this.radius * 2) pointer.draggable = true;
		}
		
		return this.next;

	};

	// calculate distance between 2 points

	Point.prototype.dist = function (p) {

		var dx = this.x - p.x;
		var dy = this.y - p.y;
		return Math.sqrt(dx * dx + dy * dy);

	};

	// Angled Constraint constructor

	function AngleConstraint (p1, p2, p3, angle, range, force) {

		this.p1     = p1;
		this.p2     = p2;
		this.p3     = p3;
		this.len1   = p1.dist(p2);
		this.len2   = p2.dist(p3);
		this.angle  = angle;
		this.range  = range;
		this.force  = force || 0.2;
		constraints = iterator.link (constraints, this);

    }

    // solve 2 vectors angled (+ stick) constraint
    // http://stackoverflow.com/questions/16336702/ragdoll-joint-angle-constraints

	AngleConstraint.prototype.solve = function () {

		var a, b, c, e, m, m1, m2, m3, x1, y1, cos, sin;
		a         = Math.atan2(this.p2.y - this.p1.y, this.p2.x - this.p1.x);
		b         = Math.atan2(this.p3.y - this.p2.y, this.p3.x - this.p2.x);
		c         = this.angle - (b - a);
		c         = c > Math.PI ? (c - 2 * Math.PI) : (c < -Math.PI ? (c + 2 * Math.PI) : c);
		e         = (Math.abs(c) > this.range) ? (-Math.sign(c) * this.range + c) * this.force : 0;
		m         = this.p1.mass + this.p2.mass;
		m1        = this.p1.mass / m;
		m2        = this.p2.mass / m;
		cos       = Math.cos(a - e);
		sin       = Math.sin(a - e);
		x1        = this.p1.x + (this.p2.x - this.p1.x) * m2;
		y1        = this.p1.y + (this.p2.y - this.p1.y) * m2;
		this.p1.x = x1 - cos * this.len1 * m2;
		this.p1.y = y1 - sin * this.len1 * m2;
		this.p2.x = x1 + cos * this.len1 * m1;
		this.p2.y = y1 + sin * this.len1 * m1;
		a         = Math.atan2(this.p2.y - this.p3.y, this.p2.x - this.p3.x) + e;
		m         = this.p2.mass + this.p3.mass;
		m2        = this.p2.mass / m;
		m3        = this.p3.mass / m;
		cos       = Math.cos(a);
		sin       = Math.sin(a);
		x1        = this.p3.x + (this.p2.x - this.p3.x) * m2;
		y1        = this.p3.y + (this.p2.y - this.p3.y) * m2;
		this.p3.x = x1 - cos * this.len2 * m2;
		this.p3.y = y1 - sin * this.len2 * m2;
		this.p2.x = x1 + cos * this.len2 * m3;
		this.p2.y = y1 + sin * this.len2 * m3;
		return this.next;

	};

	// draw angle constraint (DEBUG mode)

	AngleConstraint.prototype.draw = function () {

		ctx.beginPath();
		ctx.moveTo (this.p1.x, this.p1.y);
		ctx.lineTo(this.p2.x, this.p2.y);
		ctx.lineTo(this.p3.x, this.p3.y);
		ctx.stroke();
		ctx.beginPath();
		ctx.arc(this.p1.x, this.p1.y, this.p1.radius * 2, 0, Math.PI * 2);
		ctx.stroke();
		ctx.beginPath();
		ctx.arc(this.p2.x, this.p2.y, this.p2.radius * 2, 0, Math.PI * 2);
		ctx.stroke();
		ctx.beginPath();
		ctx.arc(this.p3.x, this.p3.y, this.p3.radius * 2, 0, Math.PI * 2);
		ctx.stroke();
		return this.next;

	};

	// simple stick constraint constructor

	function Constraint (p1, p2, force, len) {

		this.p1     = p1;
		this.p2     = p2;
		this.len    = len || p1.dist(p2);
		this.force  = force || 2;
		constraints = iterator.link (constraints, this);

	}

	// solve stick constraint

	Constraint.prototype.solve = function () {

		var d, dx, dy, s1, s2, tm;
		dx = this.p1.x - this.p2.x;
		dy = this.p1.y - this.p2.y;
		d  = Math.sqrt(dx * dx + dy * dy);
		tm = this.p1.mass + this.p2.mass;
		d  = (d - (d + (this.len - d) * this.force)) / d * 0.5;
		s1 = d * (this.p1.mass / tm);
		s2 = d * (this.p2.mass / tm);
		this.p1.x = this.p1.x - dx * s2;
		this.p1.y = this.p1.y - dy * s2;
		this.p2.x = this.p2.x + dx * s1;
		this.p2.y = this.p2.y + dy * s1;
		return this.next;

	};

	// draw constraint (DEBUG mode)

	Constraint.prototype.draw = function () {

		ctx.beginPath();
		ctx.moveTo (this.p1.x, this.p1.y);
		ctx.lineTo(this.p2.x, this.p2.y);
		ctx.stroke();
		ctx.beginPath();
		ctx.arc(this.p1.x, this.p1.y, this.p1.radius * 2, 0, Math.PI * 2);
		ctx.stroke();
		ctx.beginPath();
		ctx.arc(this.p2.x, this.p2.y, this.p2.radius * 2, 0, Math.PI * 2);
		ctx.stroke();
		return this.next;

	};

	// skin constructor

	function Skin (img, p1, p2, offsetX, offsetY, width, height, angle) {

		this.p1      = p1;
		this.p2      = p2;
		this.img     = new Image();
		this.img.src = base + img;
		this.ox      = offsetX;
		this.oy      = offsetY;
		this.w       = width;
		this.h       = height;
		this.angle   = angle || 0;
		this.ctx     = ctx;
		skins        = iterator.link(skins, this);

	}

	// draw skin

	Skin.prototype.draw = function () {

		var a   = Math.atan2((this.p2.y - this.p1.y), (this.p2.x - this.p1.x));
		var cos = Math.cos(a + this.angle);
		var sin = Math.sin(a + this.angle);
		this.ctx.setTransform(cos, sin, -sin, cos, this.p1.x, this.p1.y);
		this.ctx.drawImage(this.img, -this.ox, -this.oy, this.w,	this.h);
		return this.next;

	};

	// Stroke constructor

	function Stroke (color, p1, p2) {

		this.p1 = p1;
		this.p2 = p2;
		skins   = iterator.link(skins, this);

	}

	// draw stroke

	Stroke.prototype.draw = function () {

		ctx.beginPath();
		ctx.strokeStyle = this.color;
		ctx.moveTo(this.p1.x, this.p1.y);
		ctx.lineTo(this.p2.x, this.p2.y);
		ctx.stroke();
		return this.next;

	};

	// set canvas

	var canvas = {  
		width:  0, 
		height: 0,
		elem: document.createElement('canvas'),
		resize: function () {
			this.width  = this.elem.width  = this.elem.offsetWidth;
			this.height = this.elem.height = this.elem.offsetHeight;
		},
		init: function () {
			var ctx = canvas.elem.getContext('2d');
			document.body.appendChild(canvas.elem);
			window.addEventListener('resize', canvas.resize.bind(canvas), false);
			return ctx;
		}
	};

	var ctx = canvas.init();

	// iterator

	var iterator = {
		last: null,
		link: function (list, object) {
			if (!list) list = object;
			if (this.last) this.last.next = object;
			this.last = object;
			return list;
		}
	};

	// set pointer / touch

	var pointer = {
		x:  0, 
		y:  0,
		drag: null,
		draggable: false,
		cursor: function () {
			canvas.elem.className = this.drag ? 'dragging' : (this.draggable ? 'draggable' : 'default');
		},
		dragging: function () {
			this.draggable = false;
			if (pointer.drag) {
				this.drag.x += (this.x - this.drag.x) / 20;
				this.drag.y += (this.y - this.drag.y) / 20;
			}
		},
		pointer: function (e) {
			var pointer;
			if (e.targetTouches) {
				e.preventDefault();
				pointer = e.targetTouches[0]
			} else pointer = e;
			return pointer;
		},
		addEvents: function () {
			[
				[window, 'mousemove,touchmove', function (e) {
					var pointer = this.pointer(e);
					this.x = pointer.clientX;
					this.y = pointer.clientY;
				}],
				[canvas.elem, 'mousedown,touchstart', function (e) {
					if (!this.drag) {
						var pointer = this.pointer(e);
						this.x = pointer.clientX;
						this.y = pointer.clientY;
						var dm = 9999, p = points;
						while (p) {
							var dx = p.x - this.x;
							var dy = p.y - this.y;
							var d = Math.sqrt(dx * dx + dy * dy);
							if (d < p.radius * 2) {
								if (d < dm) {
									dm = d;
									this.drag = p;
								}
							}
							p = p.next;
						}
					}
				}],
				[window, 'mouseup,touchend,touchcancel', function () {
					this.drag = null;
				}]
			].forEach(function (e) {
				for (var i = 0, events = e[1].split(','); i < events.length; i++) {
					e[0].addEventListener(events[i], e[2].bind(this), false );
				}

			}.bind(this));
		}
	};

	// add events

	pointer.addEvents();
	
	// resize

	canvas.resize();

	// scene definition

	var scene = {
		points: {
			p0: [-70, -80, 20, 1],
			p1: [0  , -200, 40, 1],
			p2: [   0,  100, 20, 1],
			p3: [-46,  100, 20, 1],
			p4: [ 75, -75, 20, 1],
			p5: [ 50,  104, 20, 1],
			p6: [ 50,  244, 20, 0.5],
			p7: [ -46, 244, 20, 0.5],
			p8: [ 50, 450, 15, 0.35],
			p9: [-46, 450, 15, 0.35],
			p10: [ -181, -80, 20, 0.5],
			p11: [ 187, -75, 20, 0.5],
			p12: [ -340, -80, 12, 0.35, -0.02],
			p13: [ 345, -75, 12, 0.35, -0.02],
			p14: [ 0, -80],
			p15: [ 0, -40],
			cloudLeft1: [ 0, 0, 0, 0],
			cloudLeft2: [ 0, 0, 0, 0],
			cloudRight1: [ 0, 0, 0, 0],
			cloudRight2: [ 0, 0, 0, 0],
			mong10: [0, -50 - canvas.height / 10],
			mong11: [0, 20, 30],
			mong12: [0, 160, 30],
			mong20: [0, -50 - canvas.height / 10],
			mong21: [0, 20, 30],
			mong22: [0, 160, 30],
			mong30: [0, -150, 0, 1, 0],
			mong31: [0, canvas.height / 2 - 150, 0, 1, -0.25],
			mong32: [0, canvas.height / 2, 80, 1, -0.25]
		},
		static: function () {
			this.points.cloudLeft1.position(0, 0);
			this.points.cloudLeft2.position(100, 0);
			this.points.cloudRight1.position(canvas.width - 183, 0);
			this.points.cloudRight2.position(canvas.width, 0);
			this.points.mong10.position(canvas.width * 0.5 -200, -100);
			this.points.mong20.position(canvas.width * 0.5 + 200, -100);
			this.points.mong30.position(300, canvas.height + 100);
		},
		constraints: [
			['p0','p1'],
			['p1','p2'],
			['p2','p3'],
			['p0','p2'],
			['p1','p3'],
			['p1','p4'],
			['p5','p2'],
			['p1','p5'],
			['p2','p4'],
			['p0','p4'],
			['p3','p5'],
			['p3','p4'],
			['p0','p10'],
			['p4','p11'],
			['p10','p12'],
			['p11','p13'],
			['p14','p3'],
			['p14','p0'],
			['p14','p4'],
			['p14','p5'],
			['p14','p15'],
			['p14','p1'],
			['p14','p2'],
			['mong10','mong11'],
			['mong11','mong12'],
			['mong20','mong21'],
			['mong21','mong22'],
			['mong30','mong31'],
			['mong31','mong32'],
			['mong12','p14', 0, canvas.height / 3],
			['mong22','p14', 0, canvas.height / 3]
		],
		angleConstraints: [
			['p0', 'p3', 'p7',  1.2, Math.PI / 1.8, 0.2],
			['p4', 'p5', 'p6', -1.2, Math.PI / 1.8, 0.2],
			['p3', 'p7', 'p9', -1.2, Math.PI / 1.8, 0.2],
			['p5', 'p6', 'p8',  1.2, Math.PI / 1.8, 0.2]
		],
		strokes: [
			['#000', 'mong30', 'mong31'],
			['#000', 'mong10', 'mong11'],
			['#000', 'mong20', 'mong21'],
			['#000', 'mong12', 'p14'],
			['#000', 'mong22', 'p14']
		],
		// pics credits Lindsey Carr - https://www.pinterest.com/catheyhaynie/lindsey-carr/
		images: [
			['gd14.png', 'cloudLeft1', 'cloudLeft2', 0, 0, 195, 188],
			['gd15.png', 'cloudRight1', 'cloudRight2', 0, 0, 183, 188],
			['gd16.png', 'mong31', 'mong32', 305, 305 / 2, 325, 305, Math.PI],
			['gd20.png', 'mong11', 'mong12', 0, 102 / 2, 150, 102],
			['gd19.png', 'mong21', 'mong22', 0, 102 / 2, 144, 102],
			['gd6.png', 'p6', 'p8', 20, 50, 246, 84, 0.16],
			['gd12.png', 'p5', 'p6', 24, 35, 188, 71],
			['gd13.png', 'p7', 'p9', 20, 35, 246, 84, -0.16],
			['gd5.png', 'p3', 'p7', 24, 35, 189, 69],
			['gd1.png', 'p2', 'p1', 30, 181 / 2, 375, 181],
			['gd18.png', 'p14', 'p15', 5, 140 / 6, 157 / 2, 140 / 3],
			['gd2.png', 'p0', 'p10', 22, 26, 148, 49],
			['gd2.png', 'p4', 'p11', 22, 26, 148, 49],
			['gd3.png', 'p11', 'p13', 17, 22, 199, 43],
			['gd11.png', 'p10', 'p12', 17, 22, 199, 43]
		],
		build: function () {

			var p, i, c, o, s;
			iterator.last = null;
			for (p in scene.points) {
				o = scene.points[p];
				scene.points[p] = new Point (o[0], o[1], o[2], o[3], o[4]);
			}
			// build stick constraints
			iterator.last = null;
			for (i = 0; i < scene.constraints.length; i++) {
				c = scene.constraints[i];
				new Constraint (scene.points[c[0]], scene.points[c[1]], c[2], c[3]);
			}
			// build angle constraints
			for (i = 0; i < scene.angleConstraints.length; i++) {
				c = scene.angleConstraints[i];
				new AngleConstraint (scene.points[c[0]], scene.points[c[1]], scene.points[c[2]], c[3], c[4], c[5]);
			}
			// build strokes
			iterator.last = null;
			for (i = 0; i < scene.strokes.length; i++) {
				s = scene.strokes[i];
				new Stroke (s[0], scene.points[s[1]], scene.points[s[2]]);
			}
			// build images
			for (i = 0; i < scene.images.length; i++) {
				s = scene.images[i];
				new Skin (s[0], scene.points[s[1]], scene.points[s[2]], s[3], s[4], s[5], s[6], s[7]);
			}
		}

	};

	// build scene

	scene.build();

	// start animation

	run();

}());
</script>
</div>
<br><br>
<!--ABOUT US-->
<div style="margin-top: 690px;" id="about">
<span style="color: black;"><marquee> <a href="http://www.animatedimages.org/cat-camels-208.htm"><img src="http://www.animatedimages.org/data/media/208/animated-camel-image-0036.gif" border="0" alt="animated-camel-image-0036"  />
</span>
<span class="cd">
  <span style="color: black;">P</span>
  <span style="color: black;">A</span>
  <span style="color: black;">D</span>
  <span style="color: black;">H</span>
  <span style="color: black;">A</span>
  <span style="color: black;">R</span>
  <span style="color: black;">O</span>
  <span>&nbsp;&nbsp;</span>
  <span style="color: black;">M</span>
  <span style="color: black;">H</span>
  <span style="color: black;">A</span>
  <span style="color: black;">R</span>
  <span style="color: black;">E</span>
  <span>&nbsp;&nbsp;</span>
  <span style="color: black;">D</span>
  <span style="color: black;">E</span>
  <span style="color: black;">S</span>
  <span style="color: black;">H</span>
</span> 
</marquee></div>
<div class="container-fluid" >
	<div class="row">
      <div class="col-sm-6">
      	<div class="thumbnail-1 wow fadeInLeft" style="width: 100%;margin: 20px">
			<img src="images\about us img.jpg" width="100%" >
		</div>
      	<div class="large-1 wow bounceInLeft">
    		<img src="http://lorempixel.com/output/city-q-c-640-480-9.jpg" alt="" />
    		<span class="close">✕</span>
  		</div>
      </div>
      <div class="col-sm-6"> <center><h1  style="color:#ff007f;font-size: 50px">About Us</h1>
      	
        <hr style="width: 200px;height: 3px;background-color:#ff007f "></Center>
          <center> <p style="text-align: justify;font-size: 20px;color: black;"><b>Rajasthan is one of the most popular tourist destinations in India, for both domestic and international tourists. Rajasthan attracts tourists for its historical forts, palaces, art and culture with its slogan 'Padharo mahare desh'. Every third foreign tourist visiting India travels to Rajasthan as it is part of the Golden Triangle for tourists visiting India.</b></p></center>
      </div>
    </div>
</div> 
   <!--about us-->
	<br><br>
	<div id="services"> <Center><h1  style="color:#ff007f;font-size: 50px">SERVICES</h1>
      	
        <hr style="width: 200px;height: 3px;background-color:#ff007f "></Center><br><br>
  	</div>          
	<div class="container-fluid">
    	<div class="row">
        	<div class="col-md-3 col-sm-6 ">
            	<div class="service-box">
                	<div class="service-icon " style="width: 280px;height: 250px">
                	 	<img src="images\cr1.jpg" style="height: 100%;width:100%;">  
                	</div>
                	<div class="service-content">
                    	<h3>CAMEL RIDING</h3>
                    	<p>A camel is an even-toed ungulate in the genus Camelus that bears distinctive fatty deposits known as "humps" on its back. Camels have long been domesticated and, as livestock, they provide food (milk and meat) and textiles. </p>
                	</div>
            	</div>
        	</div>
        	<div class="col-md-3 col-sm-6 ">
            	<div class="service-box">
                	<div class="service-icon " style="width: 280px;height: 250px">
                		<img src="images\Hotel booking 1.jpg" style="height:100%;width:100%;">  
                	</div>
                	<div class="service-content">
                    	<h3>HOTEL BOOKING</h3>
                    	<p>The magazine Hotel Management was established in india in 1922 by Ahrens Publishers.It absorbed or merged with various other hotel management magazines over the years, including Hotel World, which had been established in 1875.</p>
                	</div>
            	</div>
        	</div>
        	<div class="col-md-3 col-sm-6">
            	<div class="service-box ">
                	<div class="service-icon" style="width: 280px;height: 250px">
                		<img src="images\tour guide1.jpg" style="height:100%;width:100%;">
  					</div>             
                	<div class="service-content">
                    	<h3>TOUR GUIDE FOR TOURISM</h3>
                    	<p>A tour guide is a person who provides assistance, information on cultural, historical and contemporary heritage to people on organized tours and individual clients at educational establishments and at venues of other significant interest,etc.</p>
                	</div>
            	</div>
        	</div>
        	<div class="col-md-3 col-sm-6">
            	<div class="service-box">
                	<div class="service-icon " style="width: 280px;height: 250px">
                		<img src="images\travel booking2.jpg" style="height:100%;width:100%;">
                	</div>
                	<div class="service-content">
                    	<h3>TRAVEL BOOKING</h3>
                    	<p>A travel agency is a private retailer or public service that provides travel and tourism related services to the public on behalf of suppliers such as activities, airlines, car rentals, cruise lines, hotels, railways, travel insurance, and package tours. </p>
                	</div>
            	</div>
        	</div>
    	</div>
	</div>
<br><br><br>
<div>

 	<!--Gallery-->          
	 <div id="services"> <Center><h1  style="color:#ff007f;font-size: 50px">GALLERY</h1>
      	
		<hr style="width: 200px;height: 3px;background-color:#ff007f"></Center><br><br>
	  </div>          
	<div class="row">
		<div class="col-sm-4 ">
			<p class="creds"><u>JAIPUR</u></p>
			<section class="three-d-container">
						<input type="radio" checked class="three-d-bullet a" name="three-d" style="radio-center">
						<input type="radio" class="three-d-bullet b" name="three-d">
						<input type="radio" class="three-d-bullet c" name="three-d">
						<input type="radio" class="three-d-bullet d" name="three-d">
						<input type="radio" class="three-d-bullet e" name="three-d">
						<input type="radio" class="three-d-bullet f" name="three-d">
						<div class="three-d-cube">
							<figure class="three-d-item">
								<img src="images3\birla temple jaipur1.jpg" alt="">
							</figure>
							<figure class="three-d-item">
								<img src="images3\jal mahal jaipur2.jpg" alt="">
							</figure>
							<figure class="three-d-item">
								<img src="images3\hawa mahal jaipur3.jpg" alt="">
							</figure>
							<figure class="three-d-item">
								<img src="images3\pink city jaipur4.jpg" alt="">
							</figure>
							<figure class="three-d-item">
								<img src="images3\Jaigarh Fort jaipur5.jpg" alt="">
							</figure>
							<figure class="three-d-item">
								<img src="images3\Monkey Temple Jaipur6.jpg" alt="">
							</figure>
						</div>       
			</section>
		</div>
	
		<div class="col-sm-4 ">
			<p class="creds"> <u>UDAIPUR</u></p>
			<section class="three-d-container">
						<input type="radio" checked class="three-d-bullet a" name="three-d">
						<input type="radio" class="three-d-bullet b" name="three-d">
						<input type="radio" class="three-d-bullet c" name="three-d">
						<input type="radio" class="three-d-bullet d" name="three-d">
						<input type="radio" class="three-d-bullet e" name="three-d">
						<input type="radio" class="three-d-bullet f" name="three-d">
						<div class="three-d-cube">
							<figure class="three-d-item">
								<img src="images3\city palace udaipur1.jpg" alt="">
							</figure>
							<figure class="three-d-item">
								<img src="images3\jal madir udaipur2.jpg" alt="">
							</figure>
							<figure class="three-d-item">
								<img src="images3\jagdish temple udaipur3.jpg" alt="">
							</figure>
							<figure class="three-d-item">
								<img src="images3\lake fateh sagr udaipur4.jpg" alt="">
							</figure>
							<figure class="three-d-item">
								  <img src="images3\sightseeing udaipur5.jpg" alt="">
							</figure>
							<figure class="three-d-item">
								  <img src="images3\jagmandir udipur6.jpg" alt="">
							</figure>
						</div>       
			</section>
		</div>
	
		<div class="col-sm-4 ">
			<p class="creds"><u>AJMER</u></p>
			<section class="three-d-container">
						<input type="radio" checked class="three-d-bullet a" name="three-d">
						<input type="radio" class="three-d-bullet b" name="three-d">
						<input type="radio" class="three-d-bullet c" name="three-d">
						<input type="radio" class="three-d-bullet d" name="three-d">
						<input type="radio" class="three-d-bullet e" name="three-d">
						<input type="radio" class="three-d-bullet f" name="three-d">
						<div class="three-d-cube">
						 <figure class="three-d-item">
							  <img src="images3\dargah sarif ajmer1.jpg" alt="">
						</figure>
						<figure class="three-d-item">
							  <img src="images3\taragarh fort ajmer2.jpg" alt="">
						</figure>
						<figure class="three-d-item">
							  <img src="images3\Brahma Temple ajmer3.jpg" alt="">
						</figure>
						<figure class="three-d-item">
							  <img src="images3\soin ji ki nasiya ajmer4.jpg" alt="">
						</figure>
						<figure class="three-d-item">
							  <img src="images3\nareli ajmer5.jpg" alt="">
						</figure>
						<figure class="three-d-item">
							  <img src="images3\savitri temple pushkar ajmer6.jpg" alt="">
						</figure>
						</div>       
			</section>
		</div>
	</div>
	<br><br>
		<div class="row">
		<div class="col-sm-4 ">
			<p class="creds"> <u>JODHPUR</u></p>
			<section class="three-d-container">
						<input type="radio" checked class="three-d-bullet a" name="three-d">
						<input type="radio" class="three-d-bullet b" name="three-d">
						<input type="radio" class="three-d-bullet c" name="three-d">
						<input type="radio" class="three-d-bullet d" name="three-d">
						<input type="radio" class="three-d-bullet e" name="three-d">
						<input type="radio" class="three-d-bullet f" name="three-d">
						<div class="three-d-cube">
						<figure class="three-d-item">
							  <img src="images3\mehrangarh fort jodhpur1.jpg" alt="">
						</figure>
						<figure class="three-d-item">
							  <img src="images3\umaid bahwan palace jodhpur2.jpg" alt="">
						</figure>
						<figure class="three-d-item">
							  <img src="images3\jaswant thada jodhpur3.jpg" alt="">
						</figure>
						<figure class="three-d-item">
							  <img src="images3\mandore gardens jodhpur4.jpg" alt="">
						</figure>
						<figure class="three-d-item">
							  <img src="images3\rao jodha desert rock park jodhpur5.jpg" alt="">
						</figure>
						<figure class="three-d-item">
							  <img src="images3\savitri temple pushkar ajmer6.jpg" alt="">
						</figure>
						</div>       
			</section>
		</div>
	
		<div class="col-sm-4 ">
			<p class="creds"> <u>JAISLMER</u></p>
			<section class="three-d-container">
						<input type="radio" checked class="three-d-bullet a" name="three-d">
						<input type="radio" class="three-d-bullet b" name="three-d">
						<input type="radio" class="three-d-bullet c" name="three-d">
						<input type="radio" class="three-d-bullet d" name="three-d">
						<input type="radio" class="three-d-bullet e" name="three-d">
						<input type="radio" class="three-d-bullet f" name="three-d">
						<div class="three-d-cube">
							<figure class="three-d-item">
								  <img src="images3\mandir palace jasilmer1.jpg" alt="">
							</figure>
							<figure class="three-d-item">
								  <img src="images3\heritage museum jaialmer2.jpg" alt="">
							</figure>
							<figure class="three-d-item">
								  <img src="images3\pOkhran fort jaislmer3.jpg" alt="">
							</figure>
							<figure class="three-d-item">
								  <img src="images3\jaislmer fort jaislmer4.jpg" alt="">
							</figure>
							<figure class="three-d-item">
								  <img src="images3\dersret national park jaislmer5.jpg" alt="">
							</figure>
							<figure class="three-d-item">
								  <img src="images3\Jaisalmer Government Museum jaislmer6.jpg" alt="">
							</figure>
						</div>       
			</section>
		</div>
	
		<div class="col-sm-4 ">
			<p class="creds"><u>BIKANER</u></p>
			<section class="three-d-container">
						<input type="radio" checked class="three-d-bullet a" name="three-d">
						<input type="radio" class="three-d-bullet b" name="three-d">
						<input type="radio" class="three-d-bullet c" name="three-d">
						<input type="radio" class="three-d-bullet d" name="three-d">
						<input type="radio" class="three-d-bullet e" name="three-d">
						<input type="radio" class="three-d-bullet f" name="three-d">
						<div class="three-d-cube">
							<figure class="three-d-item">
								  <img src="images3\junagarh fort bikaner1.jpg" alt="">
							</figure>
							<figure class="three-d-item">
	   *   						<img src="images3\bikaner sand dunes bikaner2.jpg" alt="">
							</figure>
							<figure class="three-d-item">
								  <img src="images3\karni mata temple bikaner3.jpg" alt="">
							</figure>
							<figure class="three-d-item">
								  <img src="images3\lallgarh palace bikaner4.jpg" alt="">
							</figure>
							<figure class="three-d-item">
								  <img src="images3\sand dunes safari bikaner5.jpg" alt="">
							</figure>
							<figure class="three-d-item">
								  <img src="images3\Gajner Wildlife Sanctuary bikaner6.jpg" alt="">
							</figure>
						</div>       
			</section>
		</div>
	</div>
	<br><br>

	<center><Center><h1  style="color:#ff007f;font-size: 50px">Famous Dances Of Rajasthan</h1>  	
        <hr style="width: 200px;height: 3px;background-color: #ff007f; "></Center><br><br>
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images\ghoomer1.jpg" style="height: 600px;width: 100%" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Ghoomer</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images\kalbalia.jpg" style="height: 600px;width: 100%" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Kalbalia</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images\katputli1.jpg" style="height: 600px;width: 100%" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="color: black">Katputli</h5>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br><br>

<!-- image slider-->
<!--<div id="Dances">
   <center><Center><h1  style="color:#ff007f;font-size: 50px">Famous Dances Of Rajasthan</h1>  	
        <hr style="width: 200px;height: 3px;background-color: #ff007f; "></Center><br><br>
	</div>
	</div>
	<br><br>
<section id="slider">
  <input type="radio" name="slider" id="s1" class="g">
  <input type="radio" name="slider" id="s2" class="g">
  <input type="radio" name="slider" id="s3" class="g" checked>
  <input type="radio" name="slider" id="s4" class="g">
  <input type="radio" name="slider" id="s5" class="g">
  <label for="s1" id="slide1"><img src="images\ka.jpg" width="100%" height="100%"></label>
  <label for="s2" id="slide2"><img src="images\ghoomer.jpg" width="100%" height="100%"></label>
  <label for="s3" id="slide3"><img src="images\ghodi.jpg" width="100%" height="100%"></label>
  <label for="s4" id="slide4"><img src="images\katputli.jpg" width="100%" height="100%"></label>
  <label for="s5" id="slide5"><img src="images\bh.jpg" width="100%" height="100%"></label>
</section>-->
<!-- Copyright -->

<div id="maps"> <Center><h1  style="color:#ff007f;font-size: 50px">Maps</h1>
      	
	<hr style="width: 200px;height: 3px;background-color:#ff007f"></Center><br><br>
  </div>          
<div>  
	<div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="http://www.gps.ie/">gps systems</a></iframe></div>
</div>  

<!-- contact form -->
<div id="contactform"> <Center><h1  style="color:#ff007f;font-size: 50px">Contact Form</h1>
	<hr style="width: 200px;height: 3px;background-color:#ff007f"></Center><br><br>
  </div>          
<div>
<div  class="container border border-primary mt-3 p-4">
<form action="rajasthanhotel.php" method="post">
	<div class="row bg-primary">
		<div class="col sm-6 m-2">
			<input type="text" name="firstname" placeholder="Enter First Name" class="form-control mt-2" id="">
			<input type="text" name="Hotelname" placeholder="Enter Hotelname" class="form-control mt-2" id="">
			<input type="text" name="Departurecity" placeholder="Enter Departure city" class="form-control mt-2" id="">
		</div>
		<div class="col sm-6 m-2">
			<input type="text" name="lastname" placeholder="Enter Last Name" class="form-control mt-2" id="">
			<input type="number" name="phone" placeholder="Enter Phone Number" class="form-control mt-2" id="">
			<input type="email" name="email" placeholder="Enter Email" class="form-control mt-2" id="">
		</div>
		<button type="submit" class="btn btn-warning text-white m-2 ">Submit</button>
	</div>
	</form>
</div>
<!--<style>
	.n:nth-child(even){
		color:#2ec4b6;
	}
	.n:nth-child(odd){
		color:#9e2a2b;
	}
</style>-->
</div>
</div>
</footer>
 <!--footer-->
<footer style="background-color: #ffa500;">
    <div class="container-fluid">
    <div class="row">	
  		</div>
  		<div class="col-sm-4" id="contactus">
    		<center><h2 style="color: white;">CONTACT</h2>
    			<hr style="width: 60px;height: 3px;background-color:#766F57 "></center><br>
   					<h6  style="color: white;text-align: left" ><i class="material-icons" style="color: white;font-size: 20px;">email</i> &nbsp;&nbsp; info@domain.com</h6>
    				<h6  style="color: white;text-align: left"><i class='fas fa-phone-volume' style="color: white;font-size: 20px"></i>&nbsp; &nbsp;0123 456 789 0112</h6>
    				<h6  style="color: white;text-align: left"> <i class="material-icons"style="color: white;font-size: 20px">location_on</i>&nbsp;&nbsp;Greenplatz Ben 29, Germany 60435</h6>
    				<h6  style="color: white;text-align: left;"> <i class='fas fa-tty' style="color: white;font-size: 20px"></i>&nbsp;&nbsp;(0012) 654 356 445</h6>
  		</div> 
  		<div class="col-sm-4">
   			<center><h2 style="color: white;">LATEST NEWS</h2>
     			<hr style="width: 60px;height: 3px;background-color:#766F57 "></center>
     			<h5>25.1.2021</h5>
     			<b><h6 style="color: white;text-align: left">ETIAM TEMPOR ODIO TELLUS.</h6></b>
    			<p style="color: white;text-align: left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. Etiam tempor odio tellus.</p>
    			<h5>25.1.2021</h5>
     			<b><h6 style="color: white;text-align: left">ETIAM TEMPOR ODIO TELLUS.</h6></b>
   				 <p style="color: white;text-align: left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. Etiam tempor odio tellus.</p>
  		</div>
	</div> 	 	
</div>
	

</footer>
</body>
</html>