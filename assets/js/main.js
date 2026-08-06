const header=document.querySelector('.site-header');const toggle=document.querySelector('.nav-toggle');const nav=document.querySelector('.main-nav');
window.addEventListener('scroll',()=>header?.classList.toggle('scrolled',scrollY>24),{passive:true});
toggle?.addEventListener('click',()=>{const open=nav.classList.toggle('open');toggle.setAttribute('aria-expanded',open);toggle.innerHTML=open?'<i class="fa-solid fa-xmark"></i>':'<i class="fa-solid fa-bars"></i>'});
document.querySelectorAll('.reveal').forEach((el,i)=>el.style.setProperty('--delay',`${Math.min(i%5,4)*80}ms`));
const io=new IntersectionObserver(es=>es.forEach(e=>{if(e.isIntersecting){e.target.classList.add('in-view');io.unobserve(e.target)}}),{threshold:.12,rootMargin:'0px 0px -40px'});document.querySelectorAll('.reveal').forEach(el=>io.observe(el));
document.querySelectorAll('.accordion-header').forEach(h=>h.addEventListener('click',()=>h.parentElement.classList.toggle('open')));
