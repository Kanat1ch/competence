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