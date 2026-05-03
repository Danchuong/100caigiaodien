# MAD — Refero Style

- Refero URL: https://styles.refero.design/style/4ab90069-caed-4431-ade3-fcc44ef5e568
- Site URL: https://mad.ac
- ID: 4ab90069-caed-4431-ade3-fcc44ef5e568
- Theme: light
- Industry: design
- Created: 2026-04-30T03:36:02.270Z
- Ranks: newest: 117, popular: 1252, trending: 1281

> Pixel-perfect Monochrome Precision

## Description

MAD's visual identity is a study in muted intensity, emphasizing a monochromatic, pixel-precise aesthetic. Typography, in custom fonts, defines hierarchy with varied weights and micro-adjusted letter-spacing, providing a crisp, technical yet artistic feel. Interaction elements are ghost-like, relying on subtle borders and color shifts rather than filled states. The overall impression is one of meticulous craft and understated digital elegance.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Stormy Ash | #111313 | neutral | Primary text, icon fill, active button borders, pixel art elements — a grounding dark tone against light surfaces |
| Cloud Canvas | #d4d8d8 | neutral | Page background, primary surface color — a soft, almost white base |
| Muted Steel | #4b5353 | neutral | Secondary text, link text, subtle borders, inactive elements — a mid-tone gray for supporting information |
| Deep Space | #000000 | neutral | Decorative icon black, text color on high contrast backgrounds |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| ABCWalterNeue | Inter | 500, 560, 740 | 12px, 14px, 18px | 1.00, 1.10 | Primary headings, body text, and navigation items. Its varied weights and negative letter-spacing contribute to a precise, editorial feel. Use 1.0 line height for tight, stacked headers and 1.1 for readable body copy. |
| InputMono | IBM Plex Mono | 500 | 14px | 1.00, 1.20 | Used for specific functional text like interactive elements and code-like displays. Its monospace nature provides a technical, structured counterpoint to the primary typeface. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1 | -0.216 |
| body | 14 | 1.1 | -0.322 |
| heading | 18 | 1 | -0.486 |

## Spacing & Shape

```json
{
  "radius": {
    "nav": "4px",
    "other": "8px"
  },
  "elementGap": "4px",
  "sectionGap": "72px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Navigation Link (Active)

**Role:** Interactive text link, primarily for navigation.

Text in ABCWalterNeue, 14px, weight 500, color Stormy Ash (#111313), with a 0.5px border-top in Stormy Ash, 2px padding top/bottom and 6px left/right. Negative letter spacing at -0.023em.

### Navigation Link (Default)

**Role:** Interactive text link, primarily for navigation.

Text in ABCWalterNeue, 14px, weight 500, color Muted Steel (#4b5353), with no visible border. 2px padding top/bottom and 6px left/right. Negative letter spacing at -0.023em.

### Ghost Button

**Role:** Clickable action with minimal visual footprint.

Transparent background with a 1px Stormy Ash (#111313) border. Text in Stormy Ash, InputMono, 14px, weight 500, letter-spacing -0.023em. 2px padding top/bottom and 6px left/right. Radius 0px.

### Information Card

**Role:** Display descriptive content with a distinct visual boundary.

Transparent background, no box shadow, no borders. Content inside is typically 14px ABCWalterNeue, weight 500, color Stormy Ash (#111313). Radius 0px. Padding 0px.

## Do's

- Prioritize Stormy Ash (#111313) for primary text and interactive elements against Cloud Canvas (#d4d8d8) for maximal contrast and digital sharpness.
- Use ABCWalterNeue for all primary brand communication, varying its weights (500, 560, 740) to establish visual hierarchy without introducing new typefaces.
- Apply specific negative letter-spacing values (-0.0270em, -0.0230em, -0.0180em) to maintain the precise, tight typographic aesthetic.
- Maintain a compact density with element gaps typically at 4px and section gaps at 72px to create clear visual separation.
- Implement interactive states using subtle borders in Stormy Ash (#111313) or color shifts to Muted Steel (#4b5353), avoiding solid background fills for general buttons.
- Use radius 0px for all button-like components to maintain a stark, precise aesthetic, except where 4px is explicitly specified for internal navigation elements or 8px for specific 'other' components.

## Don'ts

- Avoid using saturated accent colors; the palette is strictly monochromatic with Stormy Ash, Cloud Canvas, and Muted Steel.
- Do not introduce new fonts; the system relies exclusively on ABCWalterNeue and InputMono.
- Do not use generic padding or margins; adhere to the defined 2px, 4px, 6px, and 72px units for consistent rhythm.
- Do not apply soft shadows, gradients, or rounded corners beyond the specified radii of 0px, 4px, and 8px, as this contradicts the crisp, pixel-perfect feel.
- Avoid large imagery or decorative elements that disrupt the text-dominant, monochromatic, and structured layout.
- Do not use block-style buttons with solid backgrounds for primary actions; prefer ghost buttons with borders or text-based links.
- Never use line heights other than 1.0 or 1.1; they are reserved for specific typographic use cases.

## Layout

The page primarily uses a full-bleed layout for the main content area, with a strong implied central axis for navigation elements. The hero section is characterized by centered textual content and prominent pixel-art icons. Sections are visually distinct through consistent vertical spacing (72px section gap) rather than alternating background bands. Content arrangement is typically centered or implicitly aligned, fostering a sense of balance. Navigation is provided via a minimalist top bar with pixel-icon links.

## Imagery

The site uses minimal imagery, focusing on pixel-art style custom icons and a stylized, noisy signature graphic. If photography or richer graphics were introduced, they would need to align with a stark, high-contrast, possibly monochromatic or duotone treatment to maintain the system's austere, digital craft aesthetic. Icons are filled, pixel-based, and black (#000000) or Stormy Ash (#111313) on a light background. Imagery serves a decorative, conceptual role rather than illustrative or product showcase, emphasizing minimalism.

## Similar Brands

| Business | Why |
| --- | --- |
| Are.na | Monochromatic palette, text-heavy UI, and a focus on precise typographic presentation. |
| Babel / Design Systems | Heavy reliance on custom monospaced fonts and a stark, almost brutalist approach to layout and component design. |
| Certain graphic studios in the 90s | A pixel-art aesthetic and stark, high-contrast monochromatic design. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- text: #111313
- background: #d4d8d8
- border: #111313
- accent: no distinct accent color
- primary action: no distinct CTA color

### 3-5 Example Component Prompts
- Create a primary navigation link: ABCWalterNeue, 14px, weight 500, color #111313, letter-spacing -0.023em, line-height 1.0, border-top 0.5px solid #111313, padding 2px 6px.
- Create a ghost button: InputMono, 14px, weight 500, color #111313, letter-spacing -0.023em, line-height 1.0, border 1px solid #111313, background rgba(0,0,0,0), border-radius 0px, padding 2px 6px.
- Create a footer legal link: ABCWalterNeue, 12px, weight 500, color #4b5353, letter-spacing -0.018em, line-height 1.0, no border, no background.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520142352-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520142352-thumb.jpg |
