# Nornorm — Refero Style

- Refero URL: https://styles.refero.design/style/0769ff4c-f719-4865-98df-de2f44c694a6
- Site URL: https://nornorm.com
- ID: 0769ff4c-f719-4865-98df-de2f44c694a6
- Theme: light
- Industry: saas
- Created: 2026-04-30T03:26:03.895Z
- Ranks: newest: 155, popular: 1254, trending: 1284

> Architectural Blueprint on White

## Description

Nornorm presents a stark, almost architectural aesthetic: clean white surfaces and deep, commanding dark typography with a single, highly saturated violet acting as a functional highlight for interactive elements and brand accents. The design emphasizes content clarity and a sense of gravity, achieved through generous negative space and a reserved use of color. Component styles are minimal, often borderless or using subtle outlines, allowing the strong typographic voice and the violet accent to direct focus.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, ghost button text (hero), navigation background |
| Midnight Ink | #000000 | neutral | Primary text across titles, body, and major UI elements, high-contrast borders |
| Storm Gray | #6a6a6a | neutral | Secondary text, muted headings, subtle borders, navigation text for inactive states |
| Light Ash | #f1efe9 | neutral | Subtle background for alternating sections or elevated surfaces |
| Frost | #ececec | neutral | Background for subtle, interactive elements and secondary buttons |
| Command Violet | #1e37a0 | brand | Violet outline accent for tags, dividers, and focused UI edges. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Lunar | Inter | 400, 500, 700 | 14px, 16px, 20px, 24px, 32px, 48px, 64px, 80px, 112px | 1.00, 1.30 | The primary typeface for all text content, from headings to body text and UI labels. Its broad range of weights and tight letter-spacing (-0.03em across all sizes) are key to its compact, authoritative feel, especially for larger headlines. Weight 700 is reserved for dominant messaging, while 400 and 500 maintain legibility in body and UI contexts. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.3 | -0.03 |
| body | 16 | 1.3 | -0.03 |
| subheading | 20 | 1.3 | -0.03 |
| heading-sm | 24 | 1.3 | -0.03 |
| heading | 32 | 1.3 | -0.03 |
| heading-lg | 48 | 1 | -0.03 |
| display | 64 | 1 | -0.03 |

## Spacing & Shape

```json
{
  "radius": {
    "links": "8px",
    "others": "8px",
    "buttons": "1440px",
    "navigation": "8px"
  },
  "elementGap": "16px",
  "sectionGap": "48px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Navigation Button

**Role:** Primary navigation links and interactive textual buttons that blend into the background.

backgroundColor: rgba(0,0,0,0), color: #ffffff, border: none, padding: 12px 12px, border-radius: 0px. Used in dark hero sections.

### Subtle Gray Button

**Role:** Secondary action buttons with a soft visual emphasis.

backgroundColor: #ececec, color: #000000, border: none, border-radius: 1440px, padding: varies (minimal, often 0px in observed data but typically 12px vertical/24px horizontal for text). This is a 'pill' shape.

### Command Violet Filled Button

**Role:** Primary call-to-action buttons, indicating strongest interactive focus.

backgroundColor: #1e37a0, color: #ffffff, border: none, border-radius: 8px (inferred from general UI radius, not button-specific), padding: 12px 24px (example sizes).

### Feature Card

**Role:** Informational cards presenting key selling points or content blocks.

backgroundColor: rgba(0,0,0,0) or #ffffff (depending on section), border: none (implied by shadow=none), border-radius: 0px. Internal padding is elementGap/cardPadding of 16px.

### Header Navigation Item

**Role:** Top-level navigation links.

color: #000000 (active) or #6a6a6a (inactive), padding: 12px vertical, 24px horizontal, border-radius: 8px (for dropdowns/active states). Font: Lunar 16px, weight 400.

## Do's

- Prioritize a white (#ffffff) or light ash (#f1efe9) background for main content areas.
- Use Midnight Ink (#000000) for all primary body text and significant headings.
- Apply Command Violet (#1e37a0) exclusively for primary interactive elements, brand accents, and decorative borders on textual elements.
- Maintain tight letter-spacing (-0.03em) across all Lunar typography to ensure a compact and serious tone.
- Implement the large 1440px border-radius for 'pill' shaped buttons and a consistent 8px radius for container-like elements such as links and potentially filled buttons.
- Ensure generous vertical spacing between sections, adhering to a 48px section gap, allowing content to breathe.
- Use Storm Gray (#6a6a6a) for all secondary, supporting text and subtle UI borders.

## Don'ts

- Avoid using highly saturated colors other than Command Violet (#1e37a0) in the primary UI.
- Do not introduce heavy shadows or gradients, as the system relies on flat surfaces and high contrast.
- Do not deviate from the strict letter-spacing values; even slight changes will undermine the typographic identity.
- Avoid using multiple border styles or thicknesses, sticking to minimal or no borders for most elements except for specific accents.
- Do not use small, playful, or highly decorative typography; maintain the serious and professional character of Lunar.
- Avoid dense UIs; prioritize clear information hierarchy with ample negative space.
- Do not apply a border-radius of 0px to interactive surface-level buttons or links except for specific 'ghost' button variants.

## Layout

The page generally follows a max-width contained model, ensuring content is centered and readable, although the hero section appears full-bleed. The hero pattern consists of a large, commanding centered headline overlaid on a rich, textural image, accompanied by ghost and subtle gray buttons. Section rhythm is primarily defined by alternating subtle background colors (white and light ash) and consistent vertical spacing (48px section gap), creating distinct content blocks. Content arrangement frequently uses 2-column or 4-column grids for feature lists and imagery, with a strong preference for centered text stacks for main headings and descriptive paragraphs. A sticky header provides persistent navigation.

## Imagery

The visual language predominantly features high-key, product-focused photography and abstract 3D renders with a monochromatic or desaturated color palette, often featuring clean lines and precise arrangements. Photography focuses on office environments and furniture, presented in a minimalist, often uncropped or full-bleed manner. Illustrations appear as flat, geometric, and monochromatic representations of concepts, primarily used for explanatory purposes within content cards. Icons are subtle, leveraging the primary text color, typically outlined. Imagery serves to showcase products and explain concepts, maintaining a clean and professional aesthetic with a medium density, allowing UI elements and text to dominate.

## Similar Brands

| Business | Why |
| --- | --- |
| Figma | Clean, light UI with strong typography and a clear accent color for interactive elements. |
| Linear | Uses a highly structured, minimalist approach with a focus on sharp typography and functional use of accent colors. |
| Stripe | Combines a professional, white-dominant aesthetic with precise typography and subtle use of brand color highlights. |
| Vercel | Leverages a minimalist design with ample white space, strong dark typography, and a single accent color to denote interactivity. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #000000
accent: #1e37a0
primary action: no distinct CTA color

Example Component Prompts:
1. Create a Hero Section with a main headline. Use Lunar, weight 700, 64px, line-height 1.0, letter-spacing -0.03em, color #000000. Include a 'Get a free office design' button: background #1e37a0, text #ffffff, border: none, border-radius 8px, padding 12px 24px. Next to it, an 'Explore the service' button: background #ececec, text #000000, border: none, border-radius 1440px, padding 12px 24px.
2. Design a 'Why Subscribe' feature card. Use background #ffffff, border-radius 0px. Headline: Lunar, weight 500, 24px, line-height 1.3, letter-spacing -0.03em, color #000000. Body text: Lunar, weight 400, 16px, line-height 1.3, letter-spacing -0.03em, color #6a6a6a. Ensure 16px padding inside the card.
3. Create a top navigation bar. Background #ffffff. Brand logo text: Lunar, weight 700, 24px, line-height 1.3, letter-spacing -0.03em, color #000000. Navigation links: Lunar, weight 400, 16px, line-height 1.3, letter-spacing -0.03em. Inactive text color #6a6a6a, active text color #000000 with an optional 1.5px border-bottom in #1e37a0. Global (EN) button: background #ececec, text #000000, border-radius 1440px, padding 12px 24px. Book a meeting button: background #1e37a0, text #ffffff, border-radius 8px, padding 12px 24px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519543549-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519543549-thumb.jpg |
