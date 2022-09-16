gsap.registerPlugin(ScrollTrigger);



gsap.from('.fancy-header',{
  duration:1,
  y:-70,
  opacity:0
})

gsap.utils.toArray(".panel").forEach((panel, i) => {
  ScrollTrigger.create({
      trigger:panel,
      start: "top top",
      pin:true,
      pinSpacing:false,
  })
})


// const tl = gsap.timeline()
// tl.to('.card',{
//   duration:1,
//   x:-70,
//   opacity:0,
//   delay:.5,
//   stagger:0.6
// })

// ScrollTrigger.create({
//   animation:tl,
//   trigger:".section3",
//   start:'center center',
//   end:'+=10',
//   scrub:true,
//   pin:true,
//   pinSpacing:false
// })

gsap.from('.stagger-animate',{
  duration:1,
  y:-70,
  opacity:0,
  delay:.5,
  stagger:0.2
})

gsap.from('.container',{
  scrollTrigger: {
    trigger: ".section2",
    start: "top center",
    end:"center center",
    scrub:true,
    markers:false
  },
  x:-50,
  opacity:0,
  duration:2,
  stagger:1

})

gsap.from('.keyboard',{
  scrollTrigger: {
    trigger: ".section2",
    start: "100px center",
    end:"300px center",
    scrub:true,
    markers:false
  },
  x:50,
  opacity:0,
  duration:2,
  delay:5

})

gsap.from('.header3',{
  scrollTrigger: {
    trigger: ".section3",
    start: "top center",
    end:"center center",
    scrub:true,
    markers:false
  },
  x:100,
  opacity:0,
  duration:1,
 
})
gsap.from('.par3',{
  scrollTrigger: {
    trigger: ".section3",
    start: "top center",
    end:"center center",
    scrub:true,
    markers:false
  },
  x:-100,
  opacity:0,
  delay:2,
  duration:1,
 
})

gsap.from('.header4',{
  scrollTrigger: {
    trigger: ".section4",
    start: "top center",
    end:"center center",
    scrub:true,
    markers:false
  },
  x:100,
  opacity:0,
  duration:1,
 
})
gsap.from('.par4',{
  scrollTrigger: {
    trigger: ".section4",
    start: "top center",
    end:"center center",
    scrub:true,
    markers:false
  },
  x:-100,
  opacity:0,
  delay:2,
  duration:1,
 
})

gsap.from('.card',{
  scrollTrigger: {
    trigger: ".section3",
    start: "100px center",
    end:"300px center",
    scrub:true,
    markers:false
  },
  y:-50,
  opacity:0,
  duration:3,
  stagger:2,
  delay:5

})

gsap.from('.tech-stack',{
  scrollTrigger: {
    trigger: ".section4",
    start: "100px center",
    end:"400px center",
    scrub:true,
    markers:false
  },
  x:-50,
  opacity:0,
  duration:5,
  stagger:2,
  delay:5

})
