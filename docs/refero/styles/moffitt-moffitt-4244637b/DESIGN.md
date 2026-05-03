# Moffitt.Moffitt. - — Refero Style

- Refero URL: https://styles.refero.design/style/4244637b-e27b-4962-b586-cb3ac605e5aa
- Site URL: https://moffittmoffitt.com
- ID: 4244637b-e27b-4962-b586-cb3ac605e5aa
- Theme: light
- Industry: design
- Created: 2026-04-30T02:04:05.247Z
- Ranks: newest: 453, popular: 872, trending: 788

> monochrome gallery canvas

## Description

Moffitt.Moffitt. evokes a gallery-like atmosphere, pairing high-contrast monochrome with ample negative space to emphasize content over interface. Its visual language relies on stark black and white, subtly textured neutrals, and a complete absence of vibrant accents. Typography is the primary vehicle for detail, with a focus on distinct display and body faces. Components are minimal and often borderless, blending into the canvas to allow imagery and strong type to command attention.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, elevated card surfaces, clean sections that emphasize content |
| Ink Black | #000000 | neutral | Primary text, strong headlines, button backgrounds, borders, and interactive elements. Establishes high contrast |
| Fog Gray | #f5f5f5 | neutral | Subtle background for secondary sections, creating visual segmentation without strong contrast |
| Charcoal Gray | #595b60 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Stone Gray | #888888 | neutral | Muted text, helper text, and decorative strokes where minimal contrast is desired |
| Divider Gray | #d8d8da | neutral | Fine borders and subtle dividers, providing structural separation |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Suisse | Helvetica Neue, Arial | 400, 500, 600 | 12px, 16px, 22px, 24px, 40px | 1.00, 1.13, 1.17, 1.20, 1.25, 1.33, 1.39, 2.00 | Primary sans-serif for all UI text, headings, and body copy. Its range of weights and sizes supports a hierarchical information architecture, from compact labels to prominent titles. |
| Lyon | Georgia, serif | 100 | 13px | 1.00 | Specialized light-weight serif for small text elements, such as metadata, captions, or callouts. Its delicacy provides a visual counterpoint to the more robust Suisse. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.33 |  |
| body | 16 | 1.25 |  |
| subheading | 22 | 1.13 |  |
| heading | 24 | 1.17 |  |
| display | 40 | 1.2 |  |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "50px",
    "cards": "0px",
    "images": "5px",
    "inputs": "0px",
    "buttons": "50px"
  },
  "elementGap": "10px",
  "sectionGap": "40px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Pill Button - Light

**Role:** Interactive element (button).

White background, Ink Black text, 50px border-radius, 11px horizontal padding, 0px vertical padding. Used for secondary actions and tags.

### Pill Button - Dark

**Role:** Interactive element (button).

Ink Black background, Canvas White text, 50px border-radius, 11px horizontal padding, 0px vertical padding. Used for primary actions and prominent tags.

### Ghost Link

**Role:** Interactive text link/button.

Transparent background, Ink Black text, no border-radius or padding. Appears as pure text, often with an implicit interactive area.

### Muted Ghost Link

**Role:** Interactive text link/button (muted).

Transparent background, Stone Gray text, no border-radius or padding. Used for tertiary actions or less prominent links that fade into the background.

### Content Card

**Role:** Container for content.

Transparent background, 0px border-radius, no box shadow, 0px internal padding. Content within defines its visual boundaries.

### Form Input

**Role:** User input field.

Transparent background, Canvas White text, Canvas White 1px border, 0px border-radius, no padding. Minimalist input field for forms.

## Do's

- Prioritize high contrast between Ink Black (#000000) and Canvas White (#ffffff) for primary text and backgrounds.
- Use Fog Gray (#f5f5f5) as a subtle background for sections to create soft visual transitions, not strong divisions.
- Apply 50px border-radius for all interactive buttons and tags to maintain the distinct pill shape.
- Employ the Suisse font family for all functional text elements, varying weight to establish hierarchy.
- Maintain generous negative space around content blocks, ensuring a breathable and uncrowded layout.
- Use 0px radius for content cards and inputs, ensuring a sharp, modern appearance.
- Ensure borders, when present, are 1px solid using Divider Gray (#d8d8da) or Ink Black (#000000) for clean definition.

## Don'ts

- Do not introduce any saturated colors; resist the urge to add color for emphasis.
- Avoid using box shadows; prefer flat, stacked surfaces or subtle background color changes for depth.
- Do not use generic button styles; all primary and secondary buttons must adhere to the 50px pill-shape radius.
- Do not add unnecessary padding or borders to cards; keep them visually lightweight and integrated with the canvas.
- Avoid heavy or complex gradients; prefer solid colors or the natural gradients of photography.
- Do not use letter-spacing other than 'normal' for Suisse and Lyon fonts.
- Do not deviate from the specified font families; avoid system defaults or other creative typographies.

## Layout

The page model is largely full-bleed, but with a strong emphasis on horizontal centering and comfortable negative space. Hero sections often feature large, impactful imagery alongside concise, high-contrast typography. Section rhythm is created through alternating Canvas White and Fog Gray backgrounds, providing clear visual breaks. Content arrangement frequently uses large, single-column blocks for impactful statements, or balanced two-column layouts pairing imagery with text. Navigation is minimal, typically a subtle sticky header with a hamburger menu icon. The overall density is spacious, allowing each element to breathe and resonate.

## Imagery

The visual language is characterized by high-quality photography, often depicting architectural spaces, product shots, or stylized portraits. Images generally have a muted, almost desaturated color palette, aligning with the overall monochrome aesthetic. They are often full-bleed or large format, acting as primary visual content. For iconography, a minimalist, outlined style is preferred, typically in Ink Black or Stone Gray, maintaining a delicate and unobtrusive presence. Imagery serves to establish atmosphere, showcase projects, and provide a sophisticated backdrop, rather than acting as purely decorative elements.

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Shares a sophisticated, high-contrast monochrome aesthetic with clean typography and minimal UI elements. |
| Apple | Employs extensive use of negative space, large impactful imagery, and a focus on subtle surfaces with high contrast text. |
| B&O (Bang & Olufsen) | Similar focus on premium, minimalist design with a heavy reliance on a black and white palette and quality photography to convey brand value. |
| Linear | Features a highly refined, almost entirely achromatic UI where typography and crisp lines define components, and color is used sparingly for functional accents (though Linear uses a distinct accent color, Moffitt.Moffitt. explicitly does not). |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #d8d8da
accent: no distinct accent color
primary action: #000000 (filled action)

Example Component Prompts:
Create a primary navigation link: text 'Projects' in Suisse weight 400 at 16px, color Ink Black (#000000), no underline. When hovered, text color subtly changes to Charcoal Gray (#595b60).
Create a Pill Button for an important action: Ink Black (#000000) background, Canvas White (#ffffff) text 'Submit' in Suisse weight 400 at 16px, 50px border-radius, 11px horizontal padding, 0px vertical padding.
Create a secondary section heading: text 'Feed' in Suisse weight 400 at 40px, color Ink Black (#000000).
Create a ghost text button for a filter: text 'Music' in Suisse weight 400 at 16px, color Ink Black (#000000), transparent background, no border, no padding. When active, background is Ink Black (#000000) and text is Canvas White (#ffffff).
Create a content card with an image: 0px border-radius, transparent background, containing an image with 5px border-radius and a caption below in Lyon weight 100 at 13px, color Stone Gray (#888888).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514614554-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514614554-thumb.jpg |
