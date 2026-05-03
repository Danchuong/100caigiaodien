# DADA PROJECTS — Refero Style

- Refero URL: https://styles.refero.design/style/615d85c7-ee6a-4b6f-8e93-c3c3f3bb515e
- Site URL: https://dada-projects.com
- ID: 615d85c7-ee6a-4b6f-8e93-c3c3f3bb515e
- Theme: light
- Industry: design
- Created: 2026-04-30T02:39:20.037Z
- Ranks: newest: 328, popular: 999, trending: 986

> Gallery Canvas, Sculpted Forms

## Description

DADA PROJECTS embodies a sophisticated editorial aesthetic with a stark black-and-white foundation and a playful, organic touch through its imagery. Typography utilizes a mix of elegant display serifs and functional sans-serifs. Surfaces are predominantly white and soft, often taking on exaggerated rounded forms or fluid, abstract shapes. The overall impression is artistic and experimental, balancing classic refinement with contemporary digital art.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, button backgrounds — provides a pristine base for artistic content |
| Text Black | #000000 | neutral | Primary text, headings, icons, borders — creates strong contrast and asserts a bold presence |
| Border Fog | #e5e7eb | neutral | Subtle borders on ghost buttons and other UI elements — barely-there dividers for soft structure |
| Shadow Ash | #bfbfbf | neutral | Soft, diffused shadows beneath cards and buttons, providing subtle depth without harshness |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Diatype | system-ui (sans-serif) | 400 | 14px, 16px, 18px, 24px, 55px | 0.95, 1.00, 1.05, 1.10, 1.43 | Body copy, captions, supporting text, and subheadings — a neutral, workhorse sans-serif for clarity and structure. |
| Romie | Playfair Display (serif) | 400 | 14px, 18px, 24px, 43px | 0.95, 1.00, 1.10, 1.43 | Captivating headlines and emphasized text — a distinctive serif that lends an artistic and elegant personality, often overlapping or scaled large. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.43 | -0.56 |
| body | 16 | 1.1 | -0.544 |
| subheading | 18 | 1.05 | -0.54 |
| heading | 24 | 1 | -0.648 |
| heading-lg | 43 | 0.95 | -0.86 |
| display | 55 | 0.95 | -1.1 |

## Spacing & Shape

```json
{
  "radius": {
    "buttons": "9999px",
    "cardsPromo": "300px",
    "cardsDefault": "120px"
  },
  "elementGap": "8px",
  "sectionGap": "80px",
  "cardPadding": "40px",
  "pageMaxWidth": null
}
```

## Components

### Filled button

**Role:** Standard interactive element for calls to action.

Background: #ffffff, Text: #000000, Border: #e5e7eb, Radius: 9999px. Minimal padding is applied for a compact feel.

### Ghost button

**Role:** Secondary action or navigational link with minimal visual weight.

Background: #ffffff, Text: #000000, Border: #e5e7eb, Radius: 9999px. Padding is implicitly handled by content, suggesting it's more for text links with background hover effects or minimal frames.

### Circular button

**Role:** Icon-only interaction or small, self-contained action.

Background: #ffffff, Text: #000000, Border: #e5e7eb, Radius: 50%. Used for subtle interactive points like menu toggles or 'show more' indicators.

### Project Card

**Role:** Container for showcasing visual project assets.

Background: #ffffff, Radius: 120px. No explicit internal padding, relies on image/content for implied spacing. Features a very soft shadow: rgba(0, 0, 0, 0.25) 0px 0px 18px 0px.

### Hero Project Card

**Role:** Prominent display for key project visuals, featuring an extreme radius.

Background: #ffffff, Radius: 300px. Large, rounded container used for primary visual elements, giving a playful, cloud-like impression. No inherent shadow.

## Do's

- Prioritize Diatype for all body text and functional UI elements (14px, 16px, 18px).
- Use Romie exclusively for headlines and artistic displays to establish an editorial and creative tone (24px, 43px).
- Maintain a monochromatic base using Text Black (#000000) for text and Canvas White (#ffffff) for backgrounds.
- Apply Border Fog (#e5e7eb) for ghost button borders and subtle UI separations.
- Employ ultra-round radii (9999px) for all buttons and small interactive elements.
- Use the soft Shadow Ash layer (rgba(0, 0, 0, 0.25) 0px 0px 18px 0px) to give a subtle lift to primary cards and buttons.
- Ensure section vertical spacing is consistently 80px using the sectionGap token.

## Don'ts

- Avoid introducing additional saturated colors; maintain the black, white, and gray palette.
- Do not apply hard, sharp corners; use rounded corners for almost all containers and interactive elements.
- Do not use heavy, opaque shadows; leverage the light, diffused Shadow Ash for depth.
- Do not use generic sans-serifs for headlines; Romie is reserved for distinctive typographic statements.
- Avoid tight element groupings; utilize comfortable spacing with an 8px elementGap and 40px cardPadding.
- Do not use color for primary action indicators, rely on visual weight from borders and text color.
- Never hardcode spacing values; use the established spacing tokens for consistent rhythm.

## Layout

The page structure is full-bleed, allowing visual content to stretch across the viewport without a fixed max-width container, creating an immersive, gallery-like feel. The hero section often features oversized, overlapping typographic elements (Romie) that interact with the background imagery or serve as a dramatic overlay. Sections maintain consistent vertical spacing (80px), transitioning seamlessly rather than using distinct dividers. Content often appears as centered stacks, or large, unique visual compositions that imply a bespoke layout for each section rather than a strict grid.

## Imagery

This design system features abstract, often organic, and highly textural 3D renders combined with fluid graphic elements. Imagery is dense and artistic, frequently cropped into exaggerated rounded shapes (120px and 300px radii) or bleeding off-canvas. The photography present is high-key and product-focused, with a bright, almost ethereal treatment. Icons are minimal, possibly outlined, blending into the UI rather than standing out. Imagery's role is primarily decorative atmosphere and artistic showcase, often taking precedence over text information.

## Elevation

| Element | Style |
| --- | --- |
| Project Card | rgba(0, 0, 0, 0.25) 0px 0px 18px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| AIGA Eye on Design | Similar editorial feel with strong typographic statements and a focus on visual art. |
| Certain graphic design portfolios | Employs an art gallery aesthetic for project display, loose layouts, and striking imagery. |
| Off-White (fashion brand website) | Uses large, impactful typography, stark white backgrounds, and a focus on high-quality visuals. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- text: #000000
- background: #ffffff
- border: #e5e7eb
- accent: no distinct accent color
- primary action: no distinct CTA color

### 3-5 Example Component Prompts
- Create a text section with a headline using Romie 43px weight 400, #000000, line-height 0.95, letter-spacing -0.86px. Follow with body text using Diatype 18px weight 400, #000000, line-height 1.05, letter-spacing -0.54px. Ensure 80px vertical spacing to the next section.
- Design a project card: background #ffffff, border-radius 120px, with a soft shadow rgba(0, 0, 0, 0.25) 0px 0px 18px 0px. Internal content should have 40px padding.
- Build a ghost button: text 'Show more' in Diatype 16px weight 400, #000000, with a 1px border in #e5e7eb, and a border-radius of 9999px. Minimal padding.
- Create a hero Project Card: background #ffffff, border-radius 300px. This should be a large visual container, and should use 40px internal padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516740713-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516740713-thumb.jpg |
