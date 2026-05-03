# Passionfroot — Refero Style

- Refero URL: https://styles.refero.design/style/aaaa705d-3042-4355-ad30-13360f04e403
- Site URL: https://www.passionfroot.me
- ID: aaaa705d-3042-4355-ad30-13360f04e403
- Theme: light
- Industry: ai
- Created: 2026-04-30T00:26:23.087Z
- Ranks: newest: 800, popular: 1245, trending: 1271

> Whimsical data observatory

## Description

Passionfroot embodies a light and energetic aesthetic, juxtaposing highly structured grids and data visualizations against whimsical, vibrant accent colors and playful 3D illustrations. The system balances professional clarity with an approachable, almost fantastical user experience. Surfaces are primarily crisp white, providing a clean canvas for sharp, purposeful typography and a spectrum of vivid hues that punctuate the interface with a soft, inviting pop.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ink Black | #1d1d1c | neutral | Primary text, critical UI elements, strong contrasts. Supports a data-rich environment |
| Canvas White | #ffffff | neutral | Backgrounds for cards, modals, and primary UI surfaces. Provides a clean, bright foundation |
| Surface Frost | #f8f7f2 | neutral | Page background, subtle content divisions, light hover states. Creates a soft, almost imperceptible surface depth |
| Ash Gray | #43423e | neutral | Secondary text, button borders, disabled states. A darker supporting neutral for hierarchy |
| Subtle Stone | #d8d6ce | neutral | Input borders, subtle dividers, ghost button borders. Provides minimal visual separation without distraction |
| Lilac Dream | #b26bf5 | accent | Violet wash for highlight backgrounds, decorative bands, and soft emphasis behind content |
| Cherry Blossom | #f788d2 | accent | Decorative card backgrounds, playful highlights. Evokes a friendly, approachable mood |
| Sunset Orange | #ff9147 | accent | Decorative card backgrounds, accent in illustrations. A warm, energetic pop of color |
| Sky Teal | #4ad5e8 | accent | Decorative card backgrounds, charts, and data visualization accents. Implies clarity and insight |
| Ocean Blue | #51b1fb | accent | Decorative card backgrounds, data points. A classic choice for digital products, signifying reliability |
| Sunbeam Yellow | #ffe747 | accent | Decorative card backgrounds, highlights for attention. Bright and optimistic |
| Velvet Violet | #b977f8 | accent | Violet outline accent for tags, dividers, and focused UI edges. Do not promote it to the primary CTA color |
| Candy Red | #ee5968 | accent | Red wash for highlight backgrounds, decorative bands, and soft emphasis behind content. Use as a supporting accent, not as a status color |
| Emerald Green | #58df8c | accent | Green wash for highlight backgrounds, decorative bands, and soft emphasis behind content. Use as a supporting accent, not as a status color |
| Deep Sea Blue | #2c91af | accent | Specialized links, icon accents in data visualizations, subtle borders. A more grounded, informational blue |
| Royal Purple | #8200db | accent | Violet outline accent for tags, dividers, and focused UI edges. Do not promote it to the primary CTA color |
| Soft Indigo | #dab2ff | accent | Outline for ghost buttons, subtle interactive borders. Provides a softer visual cue than Royal Purple |
| Pale Lavender | #f3e8ff | accent | Subtle button backgrounds, light-touch interactive fills. A very light, almost neutral accent |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| new-kansas | Georgia or Libre Baskerville | 400, 500 | 16px, 20px, 28px, 48px, 64px | 1.00, 1.20, 1.25, 1.35, 1.45, 1.50 | Headings, titles, and display text. Its distinct character adds a bespoke, editorial feel to key messages, differentiating them from standard UI text. |
| Nunito Sans | Open Sans or Lato | 400, 500, 600, 700 | 10px, 12px, 14px, 15px, 16px, 18px, 20px | 1.00, 1.25, 1.33, 1.40, 1.43, 1.50, 1.56, 1.63 | Body copy, button labels, navigation, and all functional interface text. Its clean, approachable geometry ensures high readability across diverse UI elements. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.5 | -0.11 |
| body | 14 | 1.43 | -0.15 |
| body-lg | 16 | 1.5 |  |
| subheading | 20 | 1.35 |  |
| heading | 28 | 1.25 | -0.2 |
| heading-lg | 48 | 1.2 | -0.96 |
| display | 64 | 1 | -1.4 |

## Spacing & Shape

```json
{
  "radius": {
    "pill": "9999px",
    "large": "16px",
    "default": "12px",
    "extraLarge": "24px"
  },
  "elementGap": "8px",
  "sectionGap": "24px",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Call to action, primary interaction.

Background: Canvas White (#ffffff), Text: Ink Black (#1d1d1c), Padding: 10px vertical, 16px horizontal, Radius: 12px. Uses a prominent shadow: rgb(237, 234, 228) 0px 0px 0px 1px, oklch(0.23 0.002 98 / 0.04) 0px 1px 1px -0.5px, oklch(0.23 0.002 98 / 0.04) 0px 3px 3px -1.5px, oklch(0.23 0.002 98 / 0.04) 0px 6px 6px -3px, oklch(0.23 0.002 98 / 0.02) 0px 12px 12px -6px.

### Ghost Button (Header)

**Role:** Secondary actions in navigation.

Background: transparent, Text: Ash Gray (#43423e), Border: 1px solid Ash Gray (#43423e), Padding: 8px vertical, 12px horizontal, Radius: 8px. Transitions on hover.

### Text Button

**Role:** Tertiary actions, inline links within controls.

Background: transparent, Text: Ink Black (#1d1d1c), Padding: 10px vertical, 12px horizontal, Radius: 0px. Used for compact navigation or filter options.

### Pill Button

**Role:** Categorization, filters, small contextual actions.

Background: Pale Lavender (#f3e8ff), Text: Royal Purple (#8200db), Border: 1px solid Soft Indigo (#dab2ff), Padding: 4px vertical, 8px horizontal, Radius: 9999px.

### Feature Card (Achromatic)

**Role:** Content presentation, informational blocks.

Background: Canvas White (#ffffff), Radius: 10px, No box-shadow. Utilizes large internal padding, driven by content.

### Feature Card (Playful Color)

**Role:** Visually distinct content blocks, often for charts or vibrant data.

Background: Lilac Dream (#b26bf5), Cherry Blossom (#f788d2), Sunset Orange (#ff9147), Sky Teal (#4ad5e8), Ocean Blue (#51b1fb), Sunbeam Yellow (#ffe747), Candy Red (#ee5968), Emerald Green (#58df8c). Radius: 9999px for decorative elements within cards, 10px for the card itself. No box-shadow. Colors are used as full card backgrounds to create visual separation and appeal.

### Trust Bar Logo Card

**Role:** Showcasing partnerships or integrations.

Background: Surface Frost (#f8f7f2), Radius: 10px. Uses a soft shadow: oklch(0.958 0.007 98) 0px 0px 0px 1px, oklch(0.23 0.002 98 / 0.02) 0px 1px 1px -0.5px, oklch(0.23 0.002 98 / 0.02) 0px 3px 3px -1.5px, oklch(0.23 0.002 98 / 0.02) 0px 6px 6px -3px, oklch(0.23 0.002 98 / 0.00999999) 0px 12px 12px -6px.

### Input Field

**Role:** User input for forms and queries.

Background: Canvas White (#ffffff), Border: 1px solid Subtle Stone (#d8d6ce), Text: Ink Black (#1d1d1c), Placeholder: a slightly lighter gray. Radius: 12px (matches default). Focus state might involve a Royal Purple or Soft Indigo border.

### Navigation Link

**Role:** Top-level navigation items.

Text: Ink Black (#1d1d1c), Hover: Underline or slight background change. Padding: variable based on context but at least 10px horizontal and 5px vertical.

### Floating Action Buttons (Mini)

**Role:** Small, embedded contextual actions within components.

Background: Canvas White (#ffffff), Border: 1px solid Subtle Stone (#d8d6ce), Icon: Ash Gray (#43423e). Padding: 4px, Radius: 12px. Used for micro-interactions like adding new items.

## Do's

- Use new-kansas for all headings and large display text, ensuring its unique character anchors key messages.
- Prioritize Canvas White (#ffffff) as the primary surface color for all interactive components to maintain clarity and contrast.
- Employ the full palette of vibrant accent colors (Lilac Dream, Cherry Blossom, Sunset Orange, Sky Teal) as full card backgrounds or prominent data visualizations to create playful segmentation.
- Apply all shadows with the rgb(237, 234, 228) 0px 0px 0px 1px, oklch(0.23 0.002 98 / 0.04) 0px 1px 1px -0.5px, oklch(0.23 0.002 98 / 0.04) 0px 3px 3px -1.5px, oklch(0.23 0.002 98 / 0.04) 0px 6px 6px -3px, oklch(0.23 0.002 98 / 0.02) 0px 12px 12px -6px stack for elevated UI elements.
- Maintain a default border-radius of 12px for most cards, buttons, and larger interface elements, reserving 9999px for pill-shaped elements.
- Utilize 8px as the default elementGap for tight-knit UI compositions, scaling up to 24px sectionGap for content separation.
- Use Nunito Sans with weights 400-700 and its specified letter spacing for all body copy and functional text to ensure readability.
- Align all page content to a max-width container, letting the hero stretch full-bleed as a visual anchor.
- Use Deep Sea Blue (#2c91af) and Royal Purple (#8200db) for interactive icon accents and highlighted text to guide user action.
- Employ Subtle Stone (#d8d6ce) for all hairline borders and input field outlines to maintain a light, unobtrusive visual structure.
- Incorporate Emerald Green (#58df8c) or Candy Red (#ee5968) as background fills for cards that convey semantic success or error states.

## Don'ts

- Avoid using purely decorative, highly saturated background gradients on general UI components; reserve color for solid blocks and purposeful data visualization.
- Do not deviate from the specified Nunito Sans and new-kansas font families; do not introduce additional typefaces.
- Do not use dark backgrounds for primary content areas; the system is designed around a light-themed canvas.
- Refrain from using hard, angular corners; all components should adopt the characteristic 12px or 9999px border radii.
- Do not introduce heavy, opaque drop shadows; stick to the light, multi-layered shadows specified for subtle elevation.
- Avoid arbitrary color usage; every use of a chromatic color should have a clear purpose—either decorative accent, semantic indicator, or data visualization.
- Do not implement excessively sparse layouts. The system favors a compact density with intentional spacing for clarity, not emptiness.

## Layout

The page model alternates between full-bleed, content-rich hero sections and max-width contained sections. The hero showcases expansive, illustrative backgrounds with centered headlines and calls to action. Subsequent sections often use a consistent vertical rhythm of 24px, with content arranged in alternating text-left/image-right or centered stacked patterns. Card grids are prominent for feature display, making frequent use of the 8px element gap for compact arrangements. Navigation is a sticky top bar, minimally styled with text links and a ghost button, staying out of the way of the content.

## Imagery

This design system heavily features playful, soft 3D illustrations, often personified characters, set against dreamy, fantastical backgrounds (like cloudscapes or starry skies). These illustrations are the primary visual content, serving a decorative and atmospheric role rather than showcasing product features directly. They are full-width or large hero elements, not contained by card borders, and feature soft, rounded forms. Iconography is minimalist and linear, complementing the clean UI without competing with the vivid illustrations. The imagery creates a sense of wonder and accessibility, making complex AI concepts feel approachable.

## Elevation

| Element | Style |
| --- | --- |
| Button | rgb(237, 234, 228) 0px 0px 0px 1px, oklch(0.23 0.002 98 / 0.04) 0px 1px 1px -0.5px, oklch(0.23 0.002 98 / 0.04) 0px 3px 3px -1.5px, oklch(0.23 0.002 98 / 0.04) 0px 6px 6px -3px, oklch(0.23 0.002 98 / 0.02) 0px 12px 12px -6px |
| Card (Trust Bar) | oklch(0.958 0.007 98) 0px 0px 0px 1px, oklch(0.23 0.002 98 / 0.02) 0px 1px 1px -0.5px, oklch(0.23 0.002 98 / 0.02) 0px 3px 3px -1.5px, oklch(0.23 0.002 98 / 0.02) 0px 6px 6px -3px, oklch(0.23 0.002 98 / 0.00999999) 0px 12px 12px -6px |
| Hero Buttons/Cards | oklch(0.876 0.011 98) 0px 0px 0px 1px, oklch(0.23 0.002 98 / 0.04) 0px 1px 1px -0.5px, oklch(0.23 0.002 98 / 0.04) 0px 3px 3px -1.5px, oklch(0.23 0.002 98 / 0.04) 0px 6px 6px -3px, oklch(0.23 0.002 98 / 0.02) 0px 12px 12px -6px, oklch(0.23 0.002 98 / 0.02) 0px 24px 24px -12px |

## Similar Brands

| Business | Why |
| --- | --- |
| Airtable | Combines playful, colorful accents and illustrations with a highly structured, data-driven UI on a light background. |
| Webflow | Features a crisp, white-canvas aesthetic with prominent typography and a focus on clean modular components, similar to Passionfroot's structured hero. |
| Notion | Balances a clean, minimalist UI with strategic use of color for functional elements like tags and highlights, avoiding overly busy visual metaphors. |
| Linear | Employs an extremely clean, function-first interface where visual lightness and subtle elevation are key, using light neutrals and minimal color for interaction. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- text: Ink Black (#1d1d1c)
- background: Surface Frost (#f8f7f2)
- border: Subtle Stone (#d8d6ce)
- accent: Lilac Dream (#b26bf5)
- primary action: #43423e (filled action)

### 3-5 Example Component Prompts
- Create a Primary Action Button: #43423e background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.

- Create a Trust Bar: Surface Frost (#f8f7f2) background, 24px vertical padding. Display a grid of 6 brand logos, each centered within a Trust Bar Logo Card. Cards have Canvas White (#ffffff) background, 10px radius, and the Trust Bar card shadow.

- Create a Question Input Card: Canvas White (#ffffff) background, 8px radius. The card contains a text input field with a 1px solid Subtle Stone (#d8d6ce) border and 12px radius. To the right of the input, a small Floating Action Button with Canvas White (#ffffff) background, 1px solid Subtle Stone (#d8d6ce) border, 4px padding, and 12px radius, containing an Ash Gray (#43423e) icon. Below the input, a row of three Pill Buttons: 'Plan strategy', 'Run campaign', 'Measure results'. Each pill button has Pale Lavender (#f3e8ff) background, Royal Purple (#8200db) text, 1px solid Soft Indigo (#dab2ff) border, 4px vertical 8px horizontal padding, and 9999px radius.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508739420-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508739420-thumb.jpg |
