# CHAIBOY — Refero Style

- Refero URL: https://styles.refero.design/style/442dfaf8-c0c6-467b-a8d4-54e953c049f3
- Site URL: https://wearechaiboy.com
- ID: 442dfaf8-c0c6-467b-a8d4-54e953c049f3
- Theme: dark
- Industry: ecommerce
- Created: 2026-04-30T02:50:24.215Z
- Ranks: newest: 283, popular: 1262, trending: 1263

> Monochromatic minimalist canvas.

## Description

CHAIBOY presents a stark, high-contrast dark mode aesthetic, emphasizing minimalism and bold, clean typography. The visual language centers on a monochromatic palette of black, white, and various grays, creating a sophisticated and understated environment. Thin line accents found in borders and ghost buttons provide delicate structure against dark surfaces. The overall impression is one of controlled elegance, using visual sparseness to draw attention to refined products and content.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Page backgrounds, prominent surface fills, footer background — creates a deep, infinite canvas |
| Frost Gray | #afafaf | neutral | Muted text, inactive element borders, placeholder text within inputs. Provides visual separation without harsh contrast |
| Arctic White | #ffffff | neutral | Primary text, active element borders, button backgrounds for ghost buttons, primary input text — stands out vibrantly against the dark background |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| NeueHaasGroteskTP55R |  | 400 | 11px, 14px, 18px, 54px | 0.89, 1.11, 1.27, 1.29 | NeueHaasGroteskTP55R — detected in extracted data but not described by AI |
| Neue Haas Grotesk Text | Helvetica Neue |  |  |  | The singular typeface for all content, from navigation to headlines. Its precise, neutral geometry supports the minimalist aesthetic, with 'case' font features ensuring consistent uppercase styling for certain elements, maintaining a crisp, editorial feel. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.29 |  |
| body | 14 | 1.11 |  |
| heading-lg | 18 | 1.27 |  |
| display | 54 | 0.89 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "4px",
    "links": "4px",
    "buttons": "4px",
    "overall": "4px"
  },
  "elementGap": "5px",
  "sectionGap": "60px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Border Button - Frost

**Role:** Secondary action button

Text is Frost Gray (#afafaf) on a transparent background, with a 1px Frost Gray border (#afafaf), 4px border-radius, and padding of 10px top, 16px right, 7px bottom, 16px left. Used for subtle calls to action.

### Underlined Input - Frost

**Role:** Standard text input field

Transparent background with Frost Gray text (#afafaf) and a 1px bottom border in Frost Gray (#afafaf). No border-radius. Padding is 6px top, 0px right, 6px bottom, 0px left.

### Underlined Input - Arctic

**Role:** Prominent text input field

Transparent background with Arctic White text (#ffffff) and a 1px bottom border in Arctic White (#ffffff). No border-radius. Padding is 7px top, 0px right, 5px bottom, 0px left.

### Header Navigation Link

**Role:** Primary navigation item

Arctic White text (#ffffff) at 14px, NeueHaasGroteskTP55R weight 400. Hover state likely introduces a subtle border or color change (not specified).

### Footer Action Link - Muted

**Role:** Footer utility links

Frost Gray text (#afafaf) at 11px, NeueHaasGroteskTP55R weight 400. Used for terms, privacy, and contact information.

## Do's

- Use Midnight Ink (#000000) as the primary background color for all main sections and footers.
- Apply NeueHaasGroteskTP55R weight 400 across all typographic elements, prioritizing its unique 'case' font feature for uppercase styling.
- Emphasize content through high-contrast typography, pairing Arctic White (#ffffff) text on Midnight Ink (#000000) backgrounds.
- Implement Frost Gray (#afafaf) for all secondary text, inactive states, and subtle UI lines, ensuring a visual hierarchy without color.
- Maintain a uniform border-radius of 4px for all interactive elements like buttons and cards, contributing to a consistent, subtle softness.
- Structure information using a compact spacing philosophy, with an elementGap of 5px and sectionGap of 60px.
- Utilize 1px borders in Frost Gray (#afafaf) or Arctic White (#ffffff) for inputs and ghost buttons to define interactive areas subtly.

## Don'ts

- Avoid using any saturated colors unless specifically introduced as a functional accent; the system is strictly monochromatic.
- Do not deviate from the NeueHaasGroteskTP55R font family or weight 400; font consistency is a core brand identifier.
- Refrain from heavy shadows or pronounced elevation; the design relies on flat surfaces and thin borders for depth.
- Do not introduce strong visual gradients; the aesthetic is built on solid color blocks and clear contrasts.
- Avoid large, image-dominant layouts unless the imagery itself is monochromatic and stark, maintaining visual continuity.
- Do not break the 4px border-radius standard; it is a critical micro-design element across interactive components.
- Do not use generic system fonts or default link styling; always apply brand-specific typography and color.

## Layout

The page uses a full-bleed, dark background that extends edge-to-edge. Content appears to be horizontally centered within a maximal width, creating clear boundaries for readability within the expansive dark canvas. The hero section is characterized by a prominent visual element (a large black and white photograph) flanked by the stark black background. Navigation is minimal and positioned at the top, a simple, horizontal list of text links. Sections maintain consistent vertical spacing, creating a calm, unhurried rhythm.

## Imagery

Imagery is high-contrast, black and white photography, often featuring product or model shots with a stark, artistic feel. Images are primarily contained within content areas, without overlapping elements, and contribute to the overall minimalist and sophisticated mood. Icons are minimal, likely outlined, and monochromatic, integrated seamlessly into the high-contrast UI.

## Similar Brands

| Business | Why |
| --- | --- |
| Aēsop | Shares a monochromatic color palette, emphasis on sophisticated typography, and a minimalist, often dark aesthetic. |
| COS | Exhibits similar stark, clean photography, a focus on high-quality product presentation, and a restrained UI with minimal color accents. |
| Bang & Olufsen | Employs an elegant dark theme, premium product imagery, and a refined typographic approach with sparse, deliberate use of UI elements. |
| The Ordinary | Features a strong emphasis on minimalist packaging and product presentation, using very little color in its digital interface, similar to CHAIBOY's starkness. |

## Custom Sections

### Agent Prompt Guide

primary action: no distinct CTA color
- Create a secondary action button with a transparent background: Frost Gray (#afafaf) text (NeueHaasGroteskTP55R, 14px, weight 400), 1px Frost Gray (#afafaf) border, 4px border-radius, and 10px paddingTop, 16px paddingRight, 7px paddingBottom, 16px paddingLeft. Text reads 'ORDER NOW'.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517405330-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517405330-thumb.jpg |
