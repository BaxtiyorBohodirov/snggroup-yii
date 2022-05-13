// UI elements
const mainHeaderNavDrawerToggler_ui = document.querySelector(
	'#mainHeaderNavDrawerToggler'
)
const mainHeaderNavDrawer_ui = document.querySelector(
	'.main-header-navigation-drawer'
)
const mainHeaderNavDrawerOverlay_ui = document.querySelector(
	'.main-header-navigation-drawer__overlay'
)
const mainHeaderNavDrawerLinks = document.querySelectorAll(
	'.main-header-drawer-group .main-header-drawer-link'
)

const searchModal_ui = document.querySelector('#searchModal')
const searchModalInput_ui = document.querySelector('.main-search-input')

searchModal_ui.addEventListener('shown.bs.modal', () => {
	searchModalInput_ui.focus()
})

searchModal_ui.addEventListener('hidden.bs.modal', () => {
	searchModalInput_ui.value = ''
})

mainHeaderNavDrawerLinks.forEach(el => {
	el.addEventListener('click', mainNavDrawerClose)
})

mainHeaderNavDrawerToggler_ui.addEventListener('click', () => {
	mainHeaderNavDrawer_ui.classList.toggle('main-header-drawer-active')
	mainHeaderNavDrawerOverlay_ui.classList.toggle('overlay-active')
})

mainHeaderNavDrawerOverlay_ui.addEventListener('click', mainNavDrawerClose)

function mainNavDrawerClose() {
	mainHeaderNavDrawer_ui.classList.remove('main-header-drawer-active')
	mainHeaderNavDrawerOverlay_ui.classList.remove('overlay-active')
}

const tooltipTriggerList = [].slice.call(
	document.querySelectorAll('[data-bs-toggle="tooltip"]')
)
const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
	return new bootstrap.Tooltip(tooltipTriggerEl)
})
