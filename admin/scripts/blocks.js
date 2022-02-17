const elementsBlock = document.querySelector('.elements')
const addElementButton = document.querySelector('.add-element')
const elementsTypeRadio = document.querySelectorAll('input[type="radio"]')

let count = 0
let elementsType

const addElement = () => {
  count++

  const step = document.createElement('div')
  step.classList.add('steps__item', 'step', 'show-code')
  step.setAttribute('data-block', `block${count}`)
  elementsType === 'card' && step.classList.add('step--card')
  elementsType === 'list' && step.classList.add('step--list')

  const stepNumber = document.createElement('div')
  stepNumber.classList.add('step__number')
  stepNumber.innerText = count
  step.append(stepNumber)

  const stepCard = document.createElement('textarea')
  stepCard.classList.add('step__card', 'card')
  stepCard.setAttribute('rows', '4')
  stepCard.setAttribute('name', `block${count}`)
  step.append(stepCard)

  const readonly = document.createElement('div')
  readonly.classList.add('step__card', 'card', 'textarea-view')
  readonly.setAttribute('data-block', `block${count}`)
  readonly.setAttribute('readonly', 'readonly')
  step.append(readonly)

  const tooltipContainer = document.createElement('div')
  tooltipContainer.classList.add('tooltip-container')
  step.append(tooltipContainer)
  tooltipContainer.innerHTML = renderTooltipContainer(count)

  const codeIcon = document.createElement('div')
  codeIcon.classList.add('code')
  codeIcon.setAttribute('data-block', `block${count}`)
  step.append(codeIcon)
  codeIcon.innerHTML = renderCodeIcon(count)

  elementsBlock.append(step)
  initTooltip(count)
}

const changeTypeHandler = (value) => {
  elementsType = value
  const steps = document.querySelectorAll('.step')

  switch (value) {
    case 'card':
      steps.forEach(step => {
        step.classList.remove('step--list')
        step.classList.add('step--card')
      })
      break
    case 'list':
      steps.forEach(step => {
        step.classList.add('step--list')
        step.classList.remove('step--card')
      })
      break
    case 'steps':
      steps.forEach(step => {
        step.classList.remove('step--list')
        step.classList.remove('step--card')
      })
      break
  }
}

const renderTooltipContainer = (count) => {
  return `
    <input class="tooltip-input" data-block="block${count}" type="text" placeholder="Введите подсказку и выделите текст ниже"></input>
    <button class="tooltip-button" data-block="block${count}" type="button">Добавить</button>
  `
}

const renderCodeIcon = () => {
  return `<img src="img/icons/code.png" alt="code" />`
}


addElementButton.addEventListener('click', addElement)
elementsTypeRadio.forEach(radio => {
  radio.addEventListener('change', e => changeTypeHandler(e.target.value))
})
document.addEventListener('DOMContentLoaded', () => {
  initTitleTooltip()
  elementsTypeRadio.forEach(radio => {
    if (radio.checked) { elementsType = radio.value }
  })
})



// -------------------------------------------------------------------------------

const initTooltip = (count) => {
  const container = document.querySelector(`.step[data-block=block${count}]`)
  const tooltipMessage = document.querySelector(`input[data-block=block${count}]`)
  const addTooltip = document.querySelector(`button[data-block=block${count}]`)
  const changeBlock = document.querySelector(`.code[data-block=block${count}]`)
  const textareaView = document.querySelector(`.textarea-view[data-block=block${count}]`)
  const textareaCode = document.querySelector(`textarea[name="block${count}"]`)

  const addTooltipMessage = () => {
    if (!tooltipMessage.value) {
      return alert('Введите текст подсказки')
    }

    const selectionStart = textareaCode.selectionStart
    const selectionEnd = textareaCode.selectionEnd

    if (selectionStart === selectionEnd) {
      return alert('Выделите текст для создания подсказки')
    }

    const value = textareaCode.value

    const selectionText = value.slice(selectionStart, selectionEnd)
    const beforeSelectionText = value.slice(0, selectionStart)
    const afterSelectionText = value.slice(selectionEnd)

    const result = `${beforeSelectionText}<span class="tooltip" data-tooltip="${tooltipMessage.value}">${selectionText}</span>${afterSelectionText}`
    textareaCode.value = result
    textareaView.innerHTML = result
    tooltipMessage.value = ''

    const tooltips = document.querySelectorAll('.tooltip')

    if (tooltips) {
      tooltips.forEach(tooltip => {
        tippy(tooltip, {
          content: tooltip.getAttribute('data-tooltip'),
          arrow: true,
          trigger: 'click'
        });
      })
    }
  }

  const textareaChangeHandler = () => {
    textareaView.innerHTML = textareaCode.value
  }

  const changeBlockHandler = () => {
    container.classList.toggle('show-code')
  }

  addTooltip.addEventListener('click', addTooltipMessage)
  textareaCode.addEventListener('input', textareaChangeHandler)
  changeBlock.addEventListener('click', changeBlockHandler)
}

const initTitleTooltip = () => {
  const tooltipMessage = document.querySelector('.title-tooltip-message')
  const addTooltip = document.querySelector('.title-add-tooltip')
  const textareaCode = document.querySelector('.title-input')

  const addTooltipMessage = () => {
    if (!tooltipMessage.value) {
      return alert('Введите текст подсказки')
    }

    const selectionStart = textareaCode.selectionStart
    const selectionEnd = textareaCode.selectionEnd

    if (selectionStart === selectionEnd) {
      return alert('Выделите текст для создания подсказки')
    }

    const value = textareaCode.value

    const selectionText = value.slice(selectionStart, selectionEnd)
    const beforeSelectionText = value.slice(0, selectionStart)
    const afterSelectionText = value.slice(selectionEnd)

    const result = `${beforeSelectionText}<span class="tooltip" data-tooltip="${tooltipMessage.value}">${selectionText}</span>${afterSelectionText}`
    textareaCode.value = result
    tooltipMessage.value = ''
  }

  addTooltip.addEventListener('click', addTooltipMessage)
}

