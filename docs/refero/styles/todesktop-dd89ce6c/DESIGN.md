# ToDesktop — Refero Style

- Refero URL: https://styles.refero.design/style/dd89ce6c-f0aa-4ca8-bd63-19dcd81920a7
- Site URL: https://www.todesktop.com
- ID: dd89ce6c-f0aa-4ca8-bd63-19dcd81920a7
- Theme: mixed
- Industry: devtools
- Created: 2026-04-30T00:00:54.729Z
- Ranks: newest: 882, popular: 373, trending: 219

> Digital engineering lab

## Description

ToDesktop employs a 'digital engineering lab' aesthetic, characterized by a dominant dark, cool blue background contrasting with crisp white and light gray interfaces. Subtle internal shadows create a sense of depth on surfaces, while a vivid Electric Blue serves as the primary accent for interactive elements and brand highlights. Typography is precise and utilitarian, fostering a high-tech, functional atmosphere. The design balances a serious, technical tone with moments of vibrant clarity.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Void | #05061b | neutral | Deep blue-black background for hero sections and elevated cards, providing a grounded dark mode base |
| Canvas White | #ffffff | neutral | Primary background for light mode sections, card surfaces, and primary button text |
| Silver Mist | #e5e7eb | neutral | Subtle borders, dividers, and background elements in light mode, indicating UI separation |
| Ink Black | #000000 | neutral | Primary body text, heading black for full contrast, and icon fills |
| Graphite | #141414 | neutral | Secondary text, dark navigation elements, and muted icon fills, offering a softer alternative to Ink Black |
| Cloud Gray | #656565 | neutral | Muted helper text, secondary icon colors, and subtle UI elements |
| Faded White | #e6fff7 | neutral | Light background fill predominantly |
| Light Steel | #c2c2c9 | neutral | Light-touch shadows and subtle background elements, providing very faint depth |
| Polar Mist | #d6d6db | neutral | Muted UI surface for disabled controls, low-emphasis panels, and placeholder blocks. Do not promote it to the primary CTA color |
| Electric Blue | #0036ff | brand | Primary call-to-action button backgrounds and accent points, bringing energy and focus to interactive elements |
| Sky Blue | #0093ff | accent | Informational text links, badge accents, and decorative icon fills, a brighter, more open blue than Electric Blue |
| Ash Code | #384642 | neutral | Code snippet text, offering a distinct, slightly green-tinted dark gray for monospace content |
| Clean White Gradient | #f7f7f7 | neutral | Subtle background gradient for light sections or hero elements, providing volume and visual interest |
| Deep Blue Gradient | #0f071d | brand | Complex multi-stop gradient for hero backgrounds or prominent feature sections, creating a dynamic, deep blue visual field |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui, sans-serif | 400, 500, 600, 700 | 9px, 10px, 12px, 13px, 14px, 16px | 1.07, 1.33, 1.43, 1.50, 1.54, 1.57, 1.63, 1.67, 1.78, 1.83, 2.40 | Primary UI font for body text, navigation items, buttons, tables, and small headings. Its clean, functional legibility ensures clarity across varied information-dense components. Features 'cv01' and 'ss01' for nuanced character forms. |
| Aeonik Pro | Inter, system-ui, sans-serif | 400, 500 | 18px, 24px, 36px, 48px, 64px, 74px | 1.08, 1.13, 1.14, 1.22, 1.33, 1.78 | Used for prominent headings, drawing attention with its distinct, technically-inspired letterforms, especially at larger sizes. Specific stylistic sets ('ss02', 'ss05', 'ss10', 'ss11') define its unique character. |
| Geist Mono | ui-monospace, monospace | 400, 500 | 10px, 11px, 12px, 14px, 16px | 1.45, 1.50, 1.57, 2.00, 2.40, 2.67 | Dedicated monospace font for code blocks, terminal output, and technical labels, maintaining a consistent width for precise alignment. The subtle positive letter-spacing at smaller sizes enhances readability. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 16 | 1.5 | -0.04 |
| subheading | 18 | 1.78 |  |
| heading | 24 | 1.33 |  |
| heading-lg | 36 | 1.22 | -0.54 |
| display | 74 | 1.08 | -1.11 |

## Spacing & Shape

```json
{
  "radius": {
    "none": "0px",
    "cards": "24px",
    "large": "32px",
    "small": "6px",
    "badges": "999px",
    "medium": "14px",
    "buttons": "999px",
    "content": "20px"
  },
  "elementGap": "8px",
  "sectionGap": "64px",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Filled button indicating primary calls to action.

Background: Electric Blue (#0036ff), Text: Canvas White (#ffffff), Padding: 7px vertical, 16px horizontal; Radius: 999px.

### Ghost Button

**Role:** Secondary action button, visually lighter.

Background: transparent, Text: Ink Black (#000000), Border: 1px solid Silver Mist (#e5e7eb) Top/Left/Right/Bottom, Padding: 16px vertical, 20px horizontal; Radius: 0px.

### Pill Outline Button

**Role:** Outlined button with a distinct pill shape.

Background: transparent, Text: Ink Black (#000000), Border: 1px solid Polar Mist (#d6d6db) Top/Left/Right/Bottom, Padding: 7px vertical, 8-10px horizontal; Radius: 6px.

### Navigation Link Button

**Role:** Small, subtly interactive navigation button.

Background: transparent, Text: Graphite (#141414), Border: 1px solid rgba(0, 0, 0, 0.06), Padding: 7px vertical, 8px horizontal; Radius: 6px.

### Hero Card - Dark Elevated

**Role:** Prominent card for key product features, elevated in background.

Background: Midnight Void (#05061b) with 0.5 opacity, Padding: 6px all sides, Radius: 24px. Features complex inner and outer shadows for significant depth.

### Feature Card - White Frosted

**Role:** Card for light-themed features, with a frosted glass effect.

Background: Canvas White (#ffffff) with 0.88 opacity, Padding: 32px vertical, 36px horizontal; Radius: 20px. Uses soft, multi-layer shadows for subtle lift.

### Info Badge - Sky Blue Text

**Role:** Small informational tag with blue text.

Background: Canvas White (#ffffff), Text: Sky Blue (#0093ff), Padding: 4px vertical, 10-12px horizontal; Radius: 999px.

### Ghost Badge - Dark Background

**Role:** Subtle badge for categorization or status in dark areas.

Background: rgba(255, 255, 255, 0.08) or rgba(255, 255, 255, 0.04), Text: Ink Black (#000000), Padding: 4px vertical, 8px horizontal; Radius: 999px.

## Do's

- Prioritize Electric Blue (#0036ff) exclusively for primary calls-to-action and essential interactive states.
- Use a 999px border-radius for all primary buttons and badges to achieve a distinctly rounded, 'pill' aesthetic.
- Apply the Midnight Void (#05061b) for hero sections and dark mode cards to ground the interface in deep, cool tones.
- Employ Aeonik Pro with font-feature-settings 'ss02', 'ss05', 'ss10', 'ss11' for all main headlines to maintain its unique character.
- Ensure all body text and UI elements consistently use the Inter typeface with appropriate weight and size from the defined scale.
- Use Silver Mist (#e5e7eb) for all hairline borders and subtle dividers, maintaining visual separation without heavy lines.
- Whenever displaying code or terminal-like content, use Geist Mono with 0.03em letter-spacing at smaller sizes for legibility.

## Don'ts

- Do not introduce new saturated colors; adhere strictly to Electric Blue and Sky Blue for chromatic accents.
- Avoid using harsh, opaque black shadows; prefer soft, multi-layered, often slightly tinted shadows from the defined list.
- Do not deviate from the specified border radii; mixing different radius styles will undermine component consistency.
- Never use primary text colors (#000000, #141414) on pure white (#ffffff) backgrounds in code or terminal UI components.
- Do not apply bold or black backgrounds to ghost buttons; they are defined by a transparent background with a neutral border.
- Avoid generic system fonts; always map text to Inter, Aeonik Pro, or Geist Mono as appropriate.
- Do not use white as a dominant background color in the hero section; it's reserved for light-themed feature sections.

## Elevation

| Element | Style |
| --- | --- |
| Hero Card - Dark Elevated | rgba(255, 255, 255, 0.06) 0px 1px 3px 0px inset, rgba(255, 255, 255, 0.06) 0px 0.5px 0.5px 0px inset, rgba(2, 9, 44, 0.24) 0px 16px 56px 0px, rgba(1, 9, 44, 0.24) 0px 4px 16px 0px, rgba(2, 9, 44, 0.24) 0px 1px 2px 0px, rgba(5, 6, 27, 0.52) 0px 0px 0px 1px |
| Feature Card - White Frosted | rgba(0, 0, 0, 0.02) 0px 6px 6px -3px, rgba(0, 0, 0, 0.02) 0px 3px 3px -1.5px, rgba(0, 0, 0, 0.03) 0px 1px 1px -0.5px, rgba(0, 0, 0, 0.04) 0px 12px 12px -3px |
| Interactive Button (various) | rgba(255, 255, 255, 0.12) 0px 1px 2px -0.5px inset, rgba(255, 255, 255, 0.16) 0px 0.5px 0.5px 0px inset, rgba(255, 255, 255, 0.16) 0px 8px 24px -4px inset, rgba(9, 1, 20, 0.03) 0px 8px 8px -3px, rgba(9, 1, 20, 0.03) 0px 5px 5px -2.5px, rgba(8, 1, 20, 0.03) 0px 3px 3px -1.5px, rgba(8, 1, 20, 0.03) 0px 2px 2px -1px, rgba(8, 1, 20, 0.03) 0px 1px 1px -0.5px, rgba(8, 1, 20, 0.03) 0px 0.5px 0.5px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Vercel | Shares a similar developer-tooling aesthetic with dark mode sections, sharp typographic hierarchy for headlines, and clean, contained UI elements. |
| Linear | Employs a precise, utilitarian typography, often using subtle grays and a single vibrant accent color to denote interaction and status. |
| GitHub | Uses a blend of light and dark interfaces, with technical, monospace fonts for code and a clear emphasis on functional, data-rich displays. |
| Plausible Analytics | Features a clean, data-focused UI with carefully selected grays, structured layouts, and minimal, effective use of brand colors for key actions. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #e5e7eb
accent: #0093ff
primary action: #0036ff (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #0036ff background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Create a Feature Card: Background: Canvas White (#ffffff, 0.88 opacity), Radius: 20px, Padding: 32px vertical, 36px horizontal. Shadow: rgba(0, 0, 0, 0.02) 0px 6px 6px -3px, rgba(0, 0, 0, 0.02) 0px 3px 3px -1.5px, rgba(0, 0, 0, 0.03) 0px 1px 1px -0.5px, rgba(0, 0, 0, 0.04) 0px 12px 12px -3px. Headline (e.g. 'Upload your app') using Aeonik Pro, 24px, weight 500, #000000. Body text below (e.g. 'Prepare to supercharge your Electron app.') using Inter, 14px, weight 400, Cloud Gray (#656565).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777507216279-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777507216279-thumb.jpg |
