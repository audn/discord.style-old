'use strict'

import 'lazysizes'

import * as $ from 'pumpkin.js'
import objectFitImages from 'object-fit-images'
import { IdleQueue } from 'idlize/IdleQueue.mjs'
import HeightGroup from './helpers/heightGroup'
import Modal from './lib/modal'
import modalMarkup from './lib/modal.markup'

const queue = new IdleQueue()

$.ready(() => {
  document.addEventListener('lazyloaded', e => {
    objectFitImages(e.target)
  })

  const header = new HeightGroup('.js-header-spacer')
  header.watchElements()

  let $subscribeModal
  const $subscribeBtn = $.qs('.js-subscribe')

  if ($subscribeBtn) {
    queue.pushTask(() => {
      $subscribeModal = new Modal(modalMarkup)
      $subscribeModal.create()
    })

    $.on('click', $subscribeBtn, e => {
      e.preventDefault()
      queue.pushTask(() => {
        $subscribeModal.openModal()
      })
    })
  }
})
