# BlueYard Capital — Refero Style

- Refero URL: https://styles.refero.design/style/ea11696a-17c0-41f8-9b08-c820851e0ea9
- Site URL: https://www.blueyard.com
- ID: ea11696a-17c0-41f8-9b08-c820851e0ea9
- Theme: light
- Industry: fintech
- Created: 2026-04-30T02:25:11.243Z
- Ranks: newest: 375, popular: 930, trending: 775

> Soft-focus intellectual ether.

## Description

BlueYard employs a subdued, almost ethereal visual language, combining soft, desaturated background gradients with sharp, low-contrast text. This creates a contemplative distance, positioning content as abstract concepts rather than immediate tasks. The color palette is driven by nuanced, muted accents primarily used for content categorization, lending a subtle, academic feeling to information blocks. Typography is spare and precise, reinforcing an impression of rigor and thoughtfulness, rather than bold proclamations.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ink | #090b11 | neutral | Primary text, core iconography, subdued borders for cards and navigation elements. Its near-black depth offers contrast without harshness against softer backgrounds |
| Graphite | #3a3a3e | neutral | Secondary text, subtle borders, and placeholder content. This deeper gray provides necessary hierarchy without overpowering the primary text |
| Canvas White | #ffffff | neutral | Background for primary content areas, cards, and interactive elements. Its purity serves as a foundation for other delicate hues |
| Pale Mist | #b5b0b0 | neutral | Subtle background for secondary sections and borders, offering a slight visual break from pure white surfaces |
| Sunken Gold | #ffcf9e | accent | Accent for themed content cards, signaling a specific category. Its warm, muted quality integrates rather than shouts |
| Cloud Indigo | #babfff | accent | Accent for themed content cards, providing a cool, understated categorization |
| Amethyst Haze | #e3a2ef | accent | Accent for themed content cards, a vivid yet soft indicator for categorization |
| Sky Veil | #bfe0f7 | accent | Accent for themed content cards, a cool, barely-there tint for specific categories |
| Ocean Whisper | #8ceae4 | accent | Accent for themed content cards, hinting at a category with a cool, subtle hue |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Instrument Sans | Inter | 400, 500 | 12px, 24px, 48px, 54px | 1.00, 1.20, 1.50 | The sole typeface, used across all elements from headings to body text. Its clean, geometric sans-serif subtly counters the organic page gradients, providing a grounded clarity. The variable letter-spacing for larger sizes enhances its precise character. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 | -0.36 |
| body | 24 | 1.5 | -0.72 |
| heading | 48 | 1.2 | -1.44 |
| display | 54 | 1 | -1.62 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "0px",
    "cards": "0px",
    "images": "0px",
    "inputs": "0px",
    "buttons": "0px"
  },
  "elementGap": "5px",
  "sectionGap": "60px",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Primary Navigation Button

**Role:** The main menu toggle.

Minimal square button with an icon, `backgroundColor: #ffffff`, `color: #090b11`, and `border-radius: 0px`.

### Text Only Button (Ghost)

**Role:** Used for secondary actions or navigation links with minimal visual weight.

Transparent background, `#090b11` text color with `opacity: 0.8`. `border-radius: 0px`.

### Content Card - Default

**Role:** A neutral container for various content blocks.

`background: transparent`, `border-radius: 0px`, no shadow. Used for subtle content grouping and layout.

### Content Card - Canvas

**Role:** A base card for information presentation.

`background: #ffffff`, `border-radius: 0px`, no shadow, `padding: 0px`.

### Category Tag - Sunken Gold

**Role:** Categorization tag for content blocks.

`background: #ffcf9e`, text `color: #090b11`, `padding: 8px 12px`, `border-radius: 0px`.

### Category Tag - Amethyst Haze

**Role:** Categorization tag for content blocks.

`background: #e3a2ef`, text `color: #090b11`, `padding: 8px 12px`, `border-radius: 0px`.

## Do's

- Maintain zero border-radius for all interface elements and content cards to reinforce the crisp, structured appearance.
- Utilize Instrument Sans exclusively across all text elements, varying size and weight as defined in the typography section, to uphold typographic consistency.
- Employ the muted accent colors (#ffcf9, #babfff, #e3a2ef, #bfe0f7, #8ceae4) only for thematic content categorization, such as card backgrounds, avoiding their use for primary active states or calls to action.
- Prioritize transparent or white backgrounds for card elements, with `12px` padding where applicable, to maintain a light, airy feel.
- Ensure all primary headings use Instrument Sans at `48px` or `54px` with negative letter-spacing (`-1.44px` or `-1.62px`) for a precise, refined look.
- Structure page sections with a `60px` vertical gap, opting for seamless transitions or subtle background shifts instead of heavy dividers.
- Apply `:last-child { margin-bottom: 0 }` to avoid excessive trailing space within content blocks and carousels, promoting a tidy finish.

## Don'ts

- Do not introduce rounded corners; all elements must maintain `0px` border-radius.
- Avoid bold or highly saturated colors for calls to action or primary interactive states; maintain a neutral or ghost aesthetic for interactive elements.
- Refrain from using drop shadows or heavy elevation styles; surfaces should remain flat or rely on subtle background gradients for depth.
- Do not deviate from the Instrument Sans typeface or introduce additional font families.
- Do not use explicit borders on cards or primary content blocks unless it's a specific categorical indicator with a muted accent color.
- Avoid large, impactful hero images; prioritize abstract gradients or large typography in hero sections.
- Do not use letter-spacing: normal for headlines or display text; actively use negative letter-spacing for larger type sizes.

## Layout

The page primarily uses a full-bleed layout, stretching content edges to the viewport, particularly for the hero and section backgrounds. Content within these full-bleed sections is centrally aligned, featuring a large, centered headline over an abstract visual. Sections have a consistent vertical rhythm established by `60px` gaps. Content arrangements often involve a centered stack of information, with implicit grids for feature or portfolio items. Navigation is a minimal top-right hamburger icon, suggesting content focus over complex site structure.

## Imagery

Imagery is minimal and abstract, dominated by sophisticated 3D renders of spherical, ethereal objects with subtle glittering textures set against soft, gradient backgrounds. Photography is absent. Icons are typically simple, monochromatic, and have a thin stroke weight. The primary role of visuals is decorative atmosphere and conceptual framing rather than direct explanation or product demonstration. The density is image-light, with visual elements serving as large, soft focal points rather than numerous small details.

## Similar Brands

| Business | Why |
| --- | --- |
| OpenAI | Similar use of abstract, ethereal backgrounds and minimalist UI to convey advanced concepts. |
| Stripe | Clean typography, subtle use of colors for content differentiation, and an emphasis on clear information hierarchy. |
| Arc Browser | Distinctive use of gradients and muted color palettes for atmosphere rather than functional emphasis. |
| OtherSide | Abstract 3D-rendered imagery and a sophisticated, atmospheric visual presentation. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference: text: #090b11, background: #ffffff, border: #3a3a3e (for subdued elements), accent: #ffcf9e, primary action: no distinct CTA color

Example Component Prompts:
1. Create a Hero Section: Full-bleed soft gradient background from top-left #ffcf9e to bottom-right #babfff. Center a headline 'Will it be Utopia, or Oblivion?' using Instrument Sans, `size: 54px`, `weight: 500`, `color: #090b11`, `letter-spacing: -1.62px`.
2. Design a Category Card: `background: #e3a2ef`, `padding: 8px 12px`, `border-radius: 0px`. Inside, display a text label 'Biology & Chemistry' in Instrument Sans, `size: 12px`, `weight: 400`, `color: #090b11`.
3. Implement a Ghost Navigation Link: Text 'Back to home page' in Instrument Sans, `size: 24px`, `weight: 400`, `color: rgba(9, 11, 17, 0.8)`. No background or border, `border-radius: 0px`.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515894207-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515894207-thumb.jpg |
