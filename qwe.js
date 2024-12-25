document.addEventListener('DOMContentLoaded', function() { 
    const icons = document.querySelectorAll('.icon svg'); 
    let index = 0; 

    function animateIcons() { 
        icons[index].classList.add('animate-icon'); 
        
        const previousIndex = (index - 1 + icons.length) % icons.length;
        icons[previousIndex].classList.remove('animate-icon');

        index = (index + 1) % icons.length; 

        setTimeout(animateIcons, 600); 
    } 

    icons.forEach((icon) => { 
        icon.addEventListener('mouseover', () => { 
            icon.classList.add('animate-icon'); 
        }); 

        icon.addEventListener('mouseout', () => { 
            icon.classList.remove('animate-icon'); 
        }); 
    }); 

    animateIcons();  
});
