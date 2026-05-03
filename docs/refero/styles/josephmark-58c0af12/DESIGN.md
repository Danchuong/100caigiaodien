# Josephmark — Refero Style

- Refero URL: https://styles.refero.design/style/58c0af12-8706-428f-8282-482d57d7b90e
- Site URL: https://josephmark.studio
- ID: 58c0af12-8706-428f-8282-482d57d7b90e
- Theme: light
- Industry: design
- Created: 2026-04-30T02:03:46.899Z
- Ranks: newest: 455, popular: 1168, trending: 1175

> monochromatic gallery space

## Description

Josephmark evokes a commanding, minimalist aesthetic where stark contrasts and purposeful typography convey authority. The design system is built on an achromatic palette, predominantly black and white, creating an expansive canvas that recedes to highlight content. Type is a core visual element, with custom grotesk forms carrying a substantial portion of the brand identity through precise letter-spacing and varying weights. Interaction is subtle, relying on ghost elements and border changes rather than bold color accents.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight | #000000 | neutral | Primary background for hero sections and dark content blocks; primary text color on light surfaces |
| Canvas White | #ffffff | neutral | Dominant page background, card surfaces, and primary text color on dark backgrounds |
| Platinum Mist | #e5e7eb | neutral | Subtle borders, dividers, secondary ghost button borders, and subtle list item separators |
| Cloud Gray | #f4f5ef | neutral | Secondary background for alternating content sections, providing a soft lift from Canvas White |
| Granite | #666666 | neutral | Secondary text for supportive information and subdued headings |
| Stone | #a9a498 | neutral | Muted background for specific content sections and tertiary text |
| Carbon | #4e5449 | neutral | Tertiary body text for less prominent details, hinting at a slight warmth in an otherwise cool palette |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Scto Grotesk A | Inter | 300, 400, 500 | 12px, 14px, 16px, 19px, 20px, 28px, 36px, 70px | 1.10, 1.20, 1.25, 1.38, 1.40, 1.50 | Primary typeface for all headings, body text, and UI elements. Its custom, meticulously tracked forms are central to the brand's sophisticated, minimalist voice. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 | 0 |
| body-sm | 14 | 1.4 | 0 |
| body | 16 | 1.5 | -0.19 |
| subheading | 19 | 1.4 | -0.38 |
| heading | 28 | 1.25 | -0.76 |
| heading-lg | 36 | 1.2 | -1.08 |
| display | 70 | 1.1 | -2.45 |

## Spacing & Shape

```json
{
  "radius": {
    "buttons": "9999px"
  },
  "elementGap": "16px",
  "sectionGap": "64-96px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Primary Button

**Role:** Interactive element for main calls to action, appearing as a transparent pill with a white border.

Background: transparent, Text: Canvas White (#ffffff), Border: 1px solid Canvas White (#ffffff), Padding: 8px vertical, 28px horizontal, Border Radius: 9999px.

### Outlined Card Button

**Role:** Secondary action or category filter within content sections, offering structure through a subtle border.

Background: transparent, Text: Canvas White (#ffffff), Border: 1px solid Platinum Mist (#e5e7eb), Padding: 20px all sides, Border Radius: 0px.

### Text Input (Underlined)

**Role:** Form element for user data entry, with a minimal, focus-driven border.

Background: transparent, Text: Canvas White (#ffffff), Border-bottom: 1px solid Canvas White (#ffffff), Padding: 12px vertical, 0px horizontal, Border Radius: 0px.

### Navigation Link

**Role:** Interactive text link for site navigation and inline content, maintaining high contrast on all backgrounds.

Text color: Canvas White (#ffffff) on dark backgrounds, Midnight (#000000) on light backgrounds. No underline on default state. Hover state is implied by motion profile for color and transform effects.

## Do's

- Prioritize high contrast between text and background, typically Midnight (#000000) on Canvas White (#ffffff) or vice-versa.
- Use Scto Grotesk A typeface with precise letter-spacing as defined by the type scale for all text elements.
- Apply a 9999px border-radius for all primary buttons to achieve a soft, pill-like shape.
- Utilize Platinum Mist (#e5e7eb) for subtle, hairline borders and dividers to maintain visual lightness without stark separation.
- Maintain generous vertical spacing between content sections, using 64px or 96px for `sectionGap` to create ample breathing room.
- Implement `_elementGap` at 16px to ensure a consistent, comfortable distance between adjacent UI elements.
- Design interactive elements as 'ghost' components using borders, favoring transparency in backgrounds to emphasize content.
- Use the predefined motion durations (0.3s) and `ease` timing functions for all UI transitions to create a responsive, fluid feel.

## Don'ts

- Avoid using saturated or vivid chromatic colors; the palette is strictly achromatic with subtle gray variations.
- Do not introduce strong drop shadows; the design system avoids elevation through shadows and relies on stark background shifts for depth.
- Do not use generic system fonts; Scto Grotesk A is fundamental to the brand's typographic identity.
- Refrain from tight, cramped layouts; the design system emphasizes spaciousness and clear visual hierarchy through generous padding and margins.
- Do not use square or hard-edged buttons for primary actions; all prominent buttons should use the 9999px radius.
- Avoid using underlines for default link states; interaction should be indicated by hover effects or contextual cues.
- Do not feature imagery with busy backgrounds or conflicting color palettes; all visuals should either be monochromatic or have controlled color palettes that align with the brand's aesthetic.

## Similar Brands

| Business | Why |
| --- | --- |
| Akin | Monochrome palette, focus on typography and whitespace, subtle ghost buttons. |
| Useberry | High contrast dark/light sections, precise typography with custom fonts, minimalist UI. |
| Stripe (early versions) | Emphasis on clean, powerful typography, and a restrained color palette using neutrals for hierarchy. |
| Figma (landing pages) | Clear divisions between dark and light sections, strong use of custom grotesque typefaces for branding. |

## Custom Sections

### Agent Prompt Guide

**Quick Color Reference:**
text: #000000
background: #ffffff
border: #e5e7eb
accent: no distinct accent color
primary action: no distinct CTA color

**3-5 Example Component Prompts:**
No distinct primary action color was observed; use the extracted neutral button treatments instead of inventing a filled CTA color.
2. Create a content card for a project: Canvas White (#ffffff) background, 20px padding. Inside, a project image at 1:1 aspect ratio, then a heading (Scto Grotesk A, 28px, weight 500, Midnight #000000, letter-spacing -0.76px), and a secondary text label (Scto Grotesk A, 16px, weight 400, Granite #666666, letter-spacing -0.19px).
3. Create an input field: Background transparent, Text Canvas White (#ffffff), Border-bottom 1px solid Canvas White (#ffffff), Padding 12px vertical, 0px horizontal, Border Radius 0px. Placeholder text in Granite (#666666).

### Motion Philosophy

Motion is subtle yet responsive, primarily expressed through `opacity` and `transform` changes. Transitions should last 0.3s with an `ease` timing function, providing a smooth but not overly soft interaction experience. This reinforces the precise and controlled nature of the brand, ensuring UI elements feel alive without being distracting.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514601447-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514601447-thumb.jpg |
