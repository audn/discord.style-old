// Passed function will not be called for X milliseconds

export default function debounce (func, wait, immediate) {
  let timeout

  return () => {
    let context = this
    let args = arguments

    const later = () => {
      timeout = null
      if (!immediate) func.apply(context, args)
    }

    let callNow = immediate && !timeout
    clearTimeout(timeout)
    timeout = setTimeout(later, wait)
    if (callNow) func.apply(context, args)
  }
}
