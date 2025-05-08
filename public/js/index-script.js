const toggleNavigation = document.getElementById('toggleNavigation')
const navigation = document.getElementById('navigation')

toggleNavigation.addEventListener('click', () => {
    navigation.classList.toggle('nav-active')
})