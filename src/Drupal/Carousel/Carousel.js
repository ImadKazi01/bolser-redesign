import { createApp } from 'vue';
import Component from './Carousel.vue';

export default class HighlightQuote {
  constructor(element, reference) {
    if (!element) return;
    this.element = element;
    this.reference = reference;
    this.props = {};

    // Get cms content
    this.content = this.element?.dataset?.content ? JSON.parse(this.element?.dataset?.content) : {};

    // Build props
    ['title', 'image', 'jobTitle', 'description'].forEach(item => {
      this.props[item] = this.content[item];
    });

    // Mount app
    this.instance = createApp(Component, this.props).mount(this.element);
  }
}
