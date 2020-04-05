window.onload = function() {
  
  window.requestAnimFrame = (function() {
    
    return  window.requestAnimationFrame       ||
            window.webkitRequestAnimationFrame ||
            window.mozRequestAnimationFrame    ||
      
            function(callback) {
              window.setTimeout(callback, 1000 / 60);
            };
  })();
  
  function createSnow() {


    //https://github.com/VincentGarreau/particles.js/

particlesJS("particles2-js", {
  "particles": {
    "number": {
      "value": 400,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "image",
      "stroke": {
        "width": 3,
        "color": "#fff"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "https://www.dynamicdigital.us/wp-content/uploads/2013/02/starburst_white_300_drop_2.png",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.7,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 5,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 20,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": false,
      "distance": 50,
      "color": "#ffffff",
      "opacity": 0.6,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 5,
      "direction": "bottom",
      "random": true,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": true,
        "rotateX": 300,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode":  "bubble"
      },
      "onclick": {
        "enable": true,
        "mode": "repulse"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 150,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 200,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.2
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});
    
    var particles = [];
    var particleSize = 1.75;
    var maxParticles = 5000;
    var particleOpacity = .9;

    // Initialize canvas
    var canvas  = document.getElementById('snow');
    var ctx     = canvas.getContext('2d');

    // Get window width & height
    var windowWidth = window.innerWidth;
    var windowHeight = window.innerHeight;

    // Apply canvas size based on window width & height.
    // This can be changed to bound within an element instead.
    canvas.width = windowWidth;
    canvas.height = windowHeight;

    // Push particle iteration
    for (var i = 0; i < maxParticles; i++) {

      particles.push({

        // Particle x position
        x: Math.random() * windowWidth,

        // Particle y position
        y: Math.random() * windowHeight,

        // Particle radius
        r: Math.random(Math.min(particleSize)) * particleSize,

        // Particle density 
        d: Math.random() * maxParticles,
      });
    }

    // Render particles
    function render() {

      ctx.clearRect(0, 0, windowWidth, windowHeight);
      ctx.fillStyle = 'rgba(255, 255, 255, ' + particleOpacity + ')';
      ctx.beginPath();

      for(var i = 0; i < maxParticles; i++) {

        // Iterate the particles.
        var p = particles[i];

        // Move particles along x, y.
        ctx.moveTo(p.x, p.y);

        // Draw particle.
        ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2, true);
      }

      ctx.fill();
      update();
    }

    // To create a more dynamic and organic flow, we need to apply an
    // incremental 'angle' that will iterate through each particle flow.
    var angle = 0.005;

    // Update particles
    function update() {

      // Incremental angle.
      angle += 0.005;

      for (var i = 0; i < maxParticles; i++) {

        var p = particles[i];

        // Offset the particles flow based on the angle.
        p.y += Math.cos(p.d) + p.r;
        p.x += Math.sin(angle) * Math.PI / 10;

        // Re-iterate the particles to the top once the particle has
        // reached the bottom of the window.
        if (p.y > windowHeight) {

          particles[i] = {
            
            x: Math.random() * windowWidth,
            y: 0, 
            r: p.r, 
            d: p.d
          }; 
        }    
      }  
    }
    // Call function.
    (function runtime() {
      requestAnimFrame(runtime);
      render();
    })();
  } createSnow();
}