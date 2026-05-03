# Bunsa Studio — Refero Style

- Refero URL: https://styles.refero.design/style/16e75fc0-5939-40e7-a187-b2f3b70fdafe
- Site URL: https://bunsa.studio
- ID: 16e75fc0-5939-40e7-a187-b2f3b70fdafe
- Theme: light
- Industry: design
- Created: 2026-04-30T02:59:19.387Z
- Ranks: newest: 254, popular: 870, trending: 772

> Sun-drenched architectural drafting

## Description

Bunsa Studio employs a 'sun-drenched architectural drafting' aesthetic, primarily using a stark achromatic palette of crisp white and deep black. A single, vibrant blue serves as the sole accent, appearing as sharp-edged navigation elements and subtle interactive cues. Typography is minimal and bold, favoring strong contrasts. The overall impression is one of confident restraint, with design elements serving a clear functional purpose rather than decorative flourish.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #fcfaf7 | neutral | Page backgrounds, large content blocks, primary surface |
| Midnight Black | #000000 | neutral | Primary text, borders, high-contrast UI elements |
| Electric Blue | #0b0bca | brand | Violet accent for outlined action borders, linked labels, and lightweight interactive emphasis. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| HelveticaNowDisplay | Helvetica Neue | 400, 700 | 20px, 60px | 1.10, 1.30 | All textual content, from headings to body text and interactive elements. Its crisp lines and varying weights establish clear hierarchy on an otherwise spartan canvas. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 20 | 1.3 | 0 |
| display | 60 | 1.1 | 0 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px",
    "inputs": "0px",
    "buttons": "0px"
  },
  "elementGap": "4px",
  "sectionGap": "160px",
  "cardPadding": "40px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Accent Button

**Role:** Primary interactive element for navigation and actions.

Text in Electric Blue (#0b0bca) with a matching 1px border. No background fill. Zero border radius creates a sharp, angular appearance. Padding is minimal at 5px on all sides.

### Headline Section

**Role:** Project titles and major content headings.

Leverages HelveticaNowDisplay at 60px size, Midnight Black (#000000) for high contrast against Canvas White (#fcfaf7) backgrounds. Set with a line-height of 1.1 to keep text compact.

### Text Link

**Role:** Navigation items and inline references.

HelveticaNowDisplay, often 20px, Electric Blue (#0b0bca) text. Features a 1px bottom border in Electric Blue on hover/active states, not on initial display.

## Do's

- Prioritize Canvas White (#fcfaf7) as the dominant background color for all page sections.
- Use Midnight Black (#000000) for all primary text content to ensure maximum contrast.
- Reserve Electric Blue (#0b0bca) exclusively for interactive elements like buttons, links, and subtle icon accents.
- Maintain a sharp, unrounded aesthetic by using a 0px border-radius for all interactive components and containers.
- Employ the Ghost Accent Button style for all primary actions: Electric Blue text, Electric Blue border, and no background fill.
- Utilize HelveticaNowDisplay in varied weights (400, 700) and sizes (20px, 60px) for all text elements to establish hierarchy.
- Implement generous vertical spacing between major sections, with a default section gap of 160px.

## Don'ts

- Avoid using any colors other than Canvas White, Midnight Black, and Electric Blue in the interface, except within imagery or content.
- Do not use filled buttons as primary actions; always favor the outlined/ghost style with Electric Blue.
- Resist adding any shadow effects or elevation; the design system relies on flat surfaces and high contrast.
- Never introduce rounded corners on any UI element; all shapes should be angular and sharp.
- Do not vary line-height unless explicitly specified for a text size; usually, 1.1 for large headings and 1.3 for body text.
- Avoid decorative gradients or background images in UI elements; maintain a clean, flat aesthetic.
- Do not introduce extensive padding within UI elements; apply minimal padding to controls like 5px on buttons.

## Layout

The page structure is dominated by full-bleed imagery that often extends across the viewport. Content appears to be centered within these large visual blocks, with text overlaid directly on images or occupying transparent regions. Navigation is a persistent header, featuring a distinct, small Electric Blue dot on the left and the studio name on the right, both fixed. Sections appear to transition seamlessly with large full-width image blocks introducing new project content, often with a large, centered headline directly on the image. Vertical spacing between content blocks and sections is very generous.

## Imagery

The site primarily uses high-quality, full-bleed photography of interior design projects. Imagery is presented without internal borders or rounded corners, often serving as a background for textual overlays. There are no illustrations or abstract graphics; the focus is entirely on showcasing finished spaces. Images are rich in color and detail, capturing natural light within designed environments, contrasting with the stark UI elements. Icons are minimal, likely monochromatic, and used functionally for navigation points.

## Similar Brands

| Business | Why |
| --- | --- |
| A-Frame Studio | Shares a high-contrast, minimalist aesthetic with a dominant white background and crisp, sans-serif typography. |
| Works with design | Features large, full-bleed photography with overlaid text, a very clean navigation, and limited color palette. |
| Figma | Employs a stark white canvas paired with a single, vibrant accent color for interaction and brand identity, avoiding shadows. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #fcfaf7
border: #000000
accent: #0b0bca
primary action: #0b0bca (outlined action border)

Example Component Prompts:
1. Create a project headline section: Headline 'Grove Townhouse' using HelveticaNowDisplay, weight 700, 60px, Midnight Black text, centered over a full-bleed project photo background. Below the headline, include a ghost button 'View Project' with Electric Blue text, 0px radius, 5px padding, and a 1px Electric Blue border.
2. Create a navigation link: 'About Us' using HelveticaNowDisplay, weight 400, 20px, Electric Blue text (#0b0bca), no background, no border, 0px radius. This should appear in a top-right header context.
3. Create a footer copyright text: '© Bunsa Studio 2023' using HelveticaNowDisplay, weight 400, 20px, Midnight Black text, against a Canvas White background, centrally aligned with 10px top and bottom padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517942298-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517942298-thumb.jpg |
