# Shuttle — Refero Style

- Refero URL: https://styles.refero.design/style/7b0f403f-5428-49dc-9ae3-addbe64261ae
- Site URL: https://shuttle.zip/about
- ID: 7b0f403f-5428-49dc-9ae3-addbe64261ae
- Theme: light
- Industry: productivity
- Created: 2026-04-30T00:29:47.699Z
- Ranks: newest: 781, popular: 563, trending: 366

> Crisp digital canvas

## Description

Shuttle employs a crisp, utility-focused aesthetic, blending a stark monochrome palette with a single vibrant blue accent. Surfaces are predominantly white or near-white, providing a clean digital canvas for functional elements. Typography is compact and precise, maintaining a high information density without visual clutter, while subtle shadows and rounded corners soften interactive components.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page and card backgrounds, interactive elements — establishes a clean, expansive workspace |
| Cloud Gray | #f9f9f9 | neutral | Subtle background for grouped elements, provides a gentle visual separation from Canvas White |
| Border Fog | #e5e7eb | neutral | Hairline borders for cards, inputs, and dividers — delineates content without heavy visual weight |
| Stroke Silver | #b8b8b8 | neutral | Subtle shadows for buttons and cards, creating a sense of shallow elevation |
| Graphite Black | #000000 | neutral | Primary text, headings, and significant icon fills — ensures high contrast and clarity |
| Muted Ash | #a3a3a3 | neutral | Secondary text and inactive icon strokes — provides visual relief while remaining legible |
| Text Slate | #525252 | neutral | Body text and links — a softer alternative to Graphite Black for extended reading |
| Shuttle Blue | #0077ff | brand | Primary action buttons, active navigation items, and brand accents — signals interactivity and importance |
| Warning Gold | #f59e0b | accent | Yellow text accent for links, tags, and emphasized short phrases. Use as a supporting accent, not as a status color |
| Error Ember | #ef4444 | accent | Red text accent for links, tags, and emphasized short phrases. Use as a supporting accent, not as a status color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| InterVariable | Inter | 400, 500, 600, 700 | 10px, 11px, 12px, 14px, 15px, 16px, 62px | 1.00, 1.16, 1.25, 1.33, 1.40, 1.43, 1.50, 1.67 | Primary UI font for all elements – its consistent negative letter-spacing ensures a tight, modern feel even at smaller sizes. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.4 |  |
| body-sm | 11 | 1.4 |  |
| body | 12 | 1.4 |  |
| body-lg | 14 | 1.4 |  |
| heading-sm | 15 | 1.4 |  |
| heading | 16 | 1.4 |  |
| heading-lg | 62 | 1.3 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "16px",
    "badges": "9999px",
    "inputs": "8px",
    "avatars": "9999px",
    "buttons": "8px"
  },
  "elementGap": "8px",
  "sectionGap": "128px",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Key interactions

Filled with Shuttle Blue (#0077ff), white text, and 8px rounded corners. Padding is 0px vertical and 12px horizontal.

### Ghost Button

**Role:** Secondary actions

Transparent background, Graphite Black (#000000) text, and a Border Fog (#e5e7eb) border. No border radius, 0px vertical and 48px horizontal padding.

### Light Ghost Button

**Role:** Contextual actions within cards or other surfaces

White background, Graphite Black (#000000) text, and Border Fog (#e5e7eb) border. Features 8px rounded corners and 0px vertical, 12px right, 6px left padding.

### Elevated Content Card

**Role:** Prominent content blocks

Canvas White (#ffffff) background with 16px border-radius. Features a prominent shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px.

### Subtle Background Card

**Role:** Informational panels

Cloud Gray (#fafafa) background with 24px border-radius. A subtle shadow: rgba(0, 0, 0, 0.25) 0px 0px 1px 0px.

### Simple Input Field

**Role:** User data entry

Transparent background, Graphite Black (#000000) text, and a Border Fog (#e5e7eb) bottom border. Has 6px border-radius and 12px vertical padding.

### Badge/Tag

**Role:** Categorization and status

Utilizes 9999px border-radius for an elliptical shape. Background and text color vary by context but often feature neutral tones or the brand's accent colors.

## Do's

- Use InterVariable font with the default negative letter-spacing of -0.025em for all text elements to maintain a compact, tight aesthetic.
- Prioritize Canvas White (#ffffff) for primary content backgrounds and Cloud Gray (#f9f9f9) for secondary grouped elements to create subtle depth.
- Apply Shuttle Blue (#0077ff) exclusively for primary calls to action and active states to guide user interaction.
- Borders should primarily use Border Fog (#e5e7eb) at 1px solid, maintaining a light, clean separation of elements.
- Implement 8px border-radius for interactive elements like buttons and inputs, and 16px for content cards to unify component shaping.
- Separate major page sections with a vertical gap of 128px to ensure ample breathing room and clear content distinctions.
- Elevate primary content cards using the prominent shadow rgba(0, 0, 0, 0.25) 0px 25px 50px -12px to give them visual priority.

## Don'ts

- Avoid using highly saturated colors outside of the defined brand and semantic palette; maintain a predominantly neutral visual space.
- Do not vary letter-spacing for different text sizes or roles, as InterVariable's consistent -0.025em is a signature styling choice.
- Refrain from introducing heavy or opaque background colors for cards or containers; favor transparent or very light backgrounds.
- Do not use box-shadows beyond the specified subtle options; the design minimizes aggressive 3D effects.
- Avoid mixed border radii on the same component (e.g., 8px for one corner, 16px for another); ensure consistent rounding.
- Do not introduce gradients unless they are purely decorative and do not interfere with legibility or functional contrast.
- Do not use excessive visual decoration or embellishment; the system prioritizes clarity and functional simplicity.

## Layout

The page maintains a full-bleed layout for its overall canvas (Canvas White), but content within sections appears to be centered with a distinct max-width, though not explicitly defined in the data. The header features a compact, centrally aligned navigation with the brand logo, links, and a primary action button. Sections exhibit a consistent vertical rhythm, often using a section gap of 128px. Content arrangement varies, but often involves focused, centered blocks within the main flow. There's an indication of some content alternating with text and implied visuals. The navigation is a sticky top bar, providing persistent access to key actions.

## Imagery

The site's imagery is minimal, focusing on UI elements and functional icons rather than photography or complex illustrations. Icons are primarily outlined or filled with Graphite Black (#000000) or subtle gray tones, occasionally highlighted with a vibrant accent color like Warning Gold (#f59e0b). Visual treatment is clean, contained, and without ornate stylization, emphasizing product utility and clarity. The density is text-dominant, with icons serving as functional aids rather than large decorative elements.

## Elevation

| Element | Style |
| --- | --- |
| Elevated Content Card | rgba(0, 0, 0, 0.25) 0px 25px 50px -12px |
| Subtle Background Card | rgba(0, 0, 0, 0.25) 0px 0px 1px 0px |
| Button | rgba(0, 0, 0, 0.25) 0px 0px 1px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Figma | Clean white interfaces contrasted with functional but minimal use of accent colors, and a focus on sharp, readable typography. |
| Linear | Emphasis on functional, compact information density, minimal UI ornamentation, and subtle shifts in neutral backgrounds to convey hierarchy. |
| Replit | A utility-focused aesthetic with a clean white canvas, crisp typography, and strategic splashes of a single vibrant accent color to highlight interactions. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #e5e7eb
accent: #0077ff
primary action: #0077ff (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #0077ff background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Create an Elevated Content Card: Canvas White (#ffffff) background, 16px border-radius, with shadow rgba(0, 0, 0, 0.25) 0px 25px 50px -12px. Use Graphite Black (#000000) for headlines and Text Slate (#525252) for body copy (both InterVariable, -0.025em letter-spacing).
3. Design a Simple Input Field: Transparent background, Border Fog (#e5e7eb) bottom border, 8px border-radius, 12px vertical padding. Use Graphite Black (#000000) for input text (InterVariable, weight 400, -0.025em letter-spacing).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508963566-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508963566-thumb.jpg |
