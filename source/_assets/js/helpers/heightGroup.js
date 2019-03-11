// Helper for ensuring grouped elements have an equal height.
// Similar to align-items: stretch, except doesn't require
// flexbox and can work with any elements anywhere on the page.

import imagesLoaded from 'imagesloaded'
import debounce from './debounce.js'

export default class HeightGroup {
  constructor (qs) {
    this.querySelector = qs
    this.nodeList = document.querySelectorAll(this.querySelector)
    this.nodeHeights
    this.newHeight
  }

  watchElements () {
    window.addEventListener(
      'resize',
      debounce(this.matchHeights.bind(this), 250)
    )
    imagesLoaded(this.querySelector, () => {
      this.matchHeights()
    })
  }

  matchHeights () {
    this.nodeHeights = []
    this.newHeight = null

    for (let i = 0; i < this.nodeList.length; i++) {
      this.nodeList[i].style.minHeight = 'auto'
      this.nodeHeights.push(this.nodeList[i].offsetHeight)
    }

    this.newHeight = Math.max.apply(null, this.nodeHeights)
    for (let i = 0; i < this.nodeList.length; i++) {
      this.nodeList[i].style.minHeight = `${this.newHeight}px`
    }
  }
}
