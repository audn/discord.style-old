import * as $ from 'pumpkin.js'

class Modal {
  constructor (markup) {
    this.modal = document.createElement('div')
    this.modal.style = 'transition: opacity .3s ease-in-out'
    this.modal.classList = `flex justify-center fixed pin bg-black-70 z-50 items-center opacity-0 pointer-events-none js-modal-container`
    this.modal.innerHTML = markup
  }

  create (cb) {
    document.body.appendChild(this.modal)

    $.on('click', this.modal, e => {
      if (e.target === this.modal) {
        e.preventDefault()
        this.toggleModal()
      }
    })

    $.on('click', this.modal, '.js-close', e => {
      e.preventDefault()
      this.closeModal()
    })

    if (cb) cb()
  }

  destroy (cb) {
    document.removeChild(this.modal)

    if (cb) cb()
  }

  toggleModal () {
    this.modal.classList.toggle('pointer-events-none')
    this.modal.classList.toggle('opacity-0')
  }

  openModal () {
    this.modal.classList.remove('pointer-events-none')
    this.modal.classList.remove('opacity-0')
  }

  closeModal () {
    this.modal.classList.add('pointer-events-none')
    this.modal.classList.add('opacity-0')
  }
}

export default Modal
