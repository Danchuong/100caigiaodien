# Sprout — Refero Style

- Refero URL: https://styles.refero.design/style/09b7f406-c7e3-4e36-b443-bf24fcfe630f
- Site URL: https://sprout.place
- ID: 09b7f406-c7e3-4e36-b443-bf24fcfe630f
- Theme: mixed
- Industry: other
- Created: 2026-04-30T02:25:12.878Z
- Ranks: newest: 374, popular: 949, trending: 864

> Earthy, shifting canvases

## Description

Sprout embraces a playful, textured aesthetic with a warm, desaturated color palette that shifts between earthy tones, creating distinct spatial zones. Bold, almost cartoonish typography pairs with a more functional, condensed sans-serif, giving the brand a friendly yet authoritative voice. Components feature soft, rounded edges and light borders, suggesting a tactile, approachable interface. The design feels grounded and unconventional, prioritizing character over stark minimalism.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Earth Berry | #3e0808 | brand | Red action color for filled buttons, selected navigation states, and focused conversion moments |
| Sunbeam Yellow | #f3d468 | brand | Hero background, decorative accents, highlighted UI elements |
| Terracotta | #f39369 | brand | Section backgrounds, secondary surface areas, decorative elements |
| Midnight Core | #000000 | neutral | Primary text on light backgrounds, strong accents, icon fills |
| Canvas White | #ffffff | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |
| Paper Cream | #fcf6f1 | neutral | Subtle surface backgrounds, elevated card backgrounds |
| Stone Gray | #909090 | neutral | Muted text, secondary borders, disabled states |
| Ink Wash | #111111 | neutral | Alternative dark text, button borders and text on light backgrounds |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| BrickDisplayPro | Abril Fatface / Playfair Display | 400, 600 | 16px, 51px, 104px | 0.90, 1.00, 1.14, 1.33 | Display headlines and prominent feature titles. Its bold, almost irregular character gives the brand a distinctive, playful voice, emphasizing personality over traditional legibility at larger sizes. |
| SuisseIntl | Inter / Public Sans | 400, 600, 900 | 16px, 18px, 19px, 24px | 1.19, 1.30, 1.33, 1.50, 1.58 | Body copy, navigation, buttons, and functional text. Its condensed nature and varied weights provide a structured, readable counterpoint to the display font, maintaining clarity across interface elements. |
| Arial | Helvetica / system-ui | 400 | 16px | 1.20 | System fallback for general interface text where custom fonts may not be available or for specific button labels. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 16 | 1.5 | -0.16 |
| body-lg | 18 | 1.58 | -0.18 |
| subheading | 24 | 1.33 | -0.48 |
| heading | 51 | 1.14 | -1.02 |
| display | 104 | 0.9 | -3.64 |

## Spacing & Shape

```json
{
  "radius": {
    "images": "30px",
    "buttons": "20px",
    "default": "15px"
  },
  "elementGap": "10-24px",
  "sectionGap": "40px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Link Button

**Role:** Text-based actions and navigation links.

Transparent background, text in #000000 or #ffffff depending on context, no visible border, 0px border-radius, 0px padding. Uses SuisseIntl at 16px.

### Earth Berry Primary Button

**Role:** Main call-to-action.

Filled with Earth Berry (#3e0808), text in Canvas White (#ffffff), 20px border-radius, 11px vertical padding, 24px horizontal padding. Uses SuisseIntl at 16px.

### Outline Ghost Button

**Role:** Secondary call-to-action or subtle interactive elements.

Transparent background, text color in Earth Berry (#3e0808), 1px solid Earth Berry border, 20px border-radius, 11px vertical padding, 24px horizontal padding. Uses SuisseIntl at 16px.

### Hero Section Card

**Role:** Visual containers within the hero section.

Background in Paper Cream (#fcf6f1), 15px border-radius. Padding of 24px.

### Basic Card

**Role:** Standard content containers.

Background in Canvas White (#ffffff), 15px border-radius, no visible border or shadow. Padding of 24px.

## Do's

- Use Earth Berry (#3e0808) as the dominant background for body sections and primary calls to action.
- Employ BrickDisplayPro for all primary headings and display text, leveraging its distinct character at sizes 51px and 104px.
- Apply a 15px border-radius to general UI elements like cards and image containers for a softened, approachable feel.
- Ensure interactive elements like buttons consistently use a 20px border-radius.
- Utilize SuisseIntl for all body text, navigation items, and button labels, maintaining a compact and clear typographic hierarchy.
- Implement distinct background changes between sections, alternating between Earth Berry (#3e0808), Sunbeam Yellow (#f3d468), Terracotta (#f39369), and Canvas White (#ffffff).

## Don'ts

- Avoid using generic system fonts for headlines; BrickDisplayPro is key to brand identity.
- Do not deviate from the specified border-radii of 15px (default) and 20px (buttons) to preserve the brand's soft aesthetic.
- Refrain from introducing new accent colors; rely on Earth Berry, Sunbeam Yellow, and Terracotta to define highlights and section shifts.
- Do not apply heavy shadows or complex elevation; the system prefers subtle borders or background shifts to define layers.
- Avoid excessive letter-spacing on body text; SuisseIntl is designed for slightly tighter tracking (e.g., -0.0100em at 18px).
- Do not use dark text colors on Earth Berry (#3e0808) backgrounds; always use Canvas White (#ffffff) for readability.

## Layout

The page primarily uses a full-bleed layout, where hero sections and color bands stretch across the entire viewport width. Content within these sections often centers or uses alternating text-left/image-right compositions. Vertical spacing is generous, with 'sectionGap: 40px' creating clear visual breaks between different content blocks. The hero section is full-bleed, often containing centered text or a split visual, setting a distinct tone with changing background colors. Navigation is a sticky top bar with a clear call-to-action button, ensuring consistent access.

## Imagery

The site uses a mix of candid product screenshots featuring diverse users and abstract graphic elements. Product screenshots are contained within soft, rounded frames (15-30px radius) and often show video calls or interfaces with minimal contextual background, focusing on the human element. Icons are minimal, outlined, and monochromatic, primarily in Midnight Core (#000000) or Canvas White (#ffffff), serving functional purposes without drawing excessive attention. Imagery is used to explain features and showcase the product's social aspect, often taking up significant visual space.

## Similar Brands

| Business | Why |
| --- | --- |
| Framer | Bold, expressive display typography coupled with a more functional sans-serif for UI elements. |
| Supabase | Shifting background colors between sections to demarcate content blocks, using distinct earthy tones. |
| Linear | Subtle border-radii on interactive elements and containers, creating a soft but not overly rounded aesthetic. |
| Read.cv | Playful, almost quirky font choices for headlines that feel custom and convey personality. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
text: #000000 (on light backgrounds), #ffffff (on dark backgrounds)
background: #3e0808
border: #111111 (neutral), #3e0808 (primary action)
accent: #f3d468, #f39369
primary action: #3e0808 (outlined action border)

### 3-5 Example Component Prompts
1. Create a hero section: Sunbeam Yellow (#f3d468) full-bleed background. Centered headline 'Your space, Your call' using BrickDisplayPro at 104px, weight 400, color Midnight Core (#000000), letter-spacing -3.64px. Subtext 'Create a virtual space to meet, chat, and play with your favorite people.' using SuisseIntl at 18px, weight 400, color Midnight Core (#000000), letter-spacing -0.18px.
2. Create an Outlined Primary Action: Transparent background, #3e0808 border and text, 9999px radius, compact pill padding. Use it for the main CTA instead of a filled button.
3. Implement a Text Card: Canvas White (#ffffff) background, radius 15px, 24px padding. Headline 'Pull up a chair Facedock' using BrickDisplayPro at 51px, weight 600, color Earth Berry (#3e0808), letter-spacing -1.02px. Body text 'Facedocks are flexible, resizable, rearrangeable frames.' using SuisseIntl at 16px, weight 400, color Earth Berry (#3e0808), letter-spacing -0.16px.
4. Create an Outline Ghost Button: Transparent background, border 1px solid Earth Berry (#3e0808), text color Earth Berry (#3e0808). Radius 20px, 11px vertical padding, 24px horizontal padding. Label 'Try it with your face' using SuisseIntl at 16px, weight 400.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515893720-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515893720-thumb.jpg |
