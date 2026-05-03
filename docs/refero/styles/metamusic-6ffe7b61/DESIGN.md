# MetaMusic — Refero Style

- Refero URL: https://styles.refero.design/style/6ffe7b61-a418-4cbd-9e7a-a5129db6c589
- Site URL: https://metamusic.ca
- ID: 6ffe7b61-a418-4cbd-9e7a-a5129db6c589
- Theme: light
- Industry: media
- Created: 2026-04-30T03:55:28.647Z
- Ranks: newest: 27, popular: 881, trending: 820

> White Canvas, Blue Current

## Description

MetaMusic's design system uses a bright, open canvas with confident, spacious typography and an energetic blue as its primary accent. It balances structured information with distinctive organic curves and illustrative flourishes. Surfaces are mostly crisp white or subtle off-whites, providing a clean backdrop for bold headlines and call-to-action elements. The overall feel is one of clarity and approachable modernity, leveraging a limited color palette to emphasize important interactive elements and brand messaging.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #0e2575 | brand | Deep blue backgrounds for feature sections and prominent information blocks |
| Action Blue | #0066cc | brand | Primary call-to-action buttons, prominent links, and interactive elements. Its vividness drives user engagement |
| Off-White Canvas | #f4f1ea | neutral | Dominant page background for light sections, creating an open and airy feel |
| Snowdrift | #ffffff | neutral | Card backgrounds, section separators, and content areas requiring highest contrast |
| Jet Black | #000000 | neutral | Primary text color for headlines and body copy on light backgrounds, ensuring maximum readability |
| Graphite | #101820 | neutral | Dark footer background and occasional section fills |
| Slate Blue | #828aa8 | neutral | Muted secondary text, helper text, and subtle borders |
| Lavender Mist | #e6e0f8 | neutral | Light background washes for specific UI elements and subtle input borders |
| Warm Beige | #f7e1d5 | neutral | Subtle background accents, almost off-white, adding a touch of warmth |
| Silver Thread | #d6d6d6 | neutral | Division lines and decorative borders, providing subtle structure |
| Sky Tint | #e9f4ff | neutral | Very faint blue background for elevated cards or sections, indicating a slight lift |
| Deep Plum | #213680 | brand | Backgrounds for circular feature icons at a specific scale |
| Accent Blue | #0b5aaa | accent | Stroke color for illustrative elements and decorative accents |
| Wheat Dust | #f9f7f3 | neutral | Subtle, unprominent background/surface color for specific sections |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Maison Neue | Inter | 400, 500, 600 | 12px, 14px, 16px, 19px, 22px, 26px, 32px, 40px, 56px, 80px, 120px | 0.95, 1.05, 1.10, 1.20, 1.35, 1.40, 1.50 | Primary typeface for all UI text, headings, and body copy. Its clean, geometric sans-serif nature provides clarity and a modern feel across all sizes and weights. The distinct letter-spacing for larger sizes enhances visual impact. |
| Spoof | Bebas Neue | 500 | 22px | 0.90 | A distinct, semi-bold display typeface used sparingly for decorative headings and specific card titles where a slightly more condensed and impactful presence is desired. Its tight letter-spacing gives it a unique visual texture. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body-sm | 14 | 1.4 | 0 |
| body | 16 | 1.4 | 0 |
| body-lg | 19 | 1.35 | 0 |
| subheading | 22 | 1.35 | -0.02 |
| heading-sm | 26 | 1.2 | -0.015 |
| heading | 32 | 1.2 | -0.01 |
| heading-lg | 40 | 1.1 | -0.01 |
| display-sm | 56 | 1.05 | -0.03 |
| display-lg | 80 | 0.95 | -0.03 |

## Spacing & Shape

```json
{
  "radius": {
    "body": "36px",
    "links": "16px",
    "badges": "9999px",
    "inputs": "8px",
    "buttons": "9999px",
    "default": "24px"
  },
  "elementGap": "8px",
  "sectionGap": "96px",
  "cardPadding": "40px",
  "pageMaxWidth": "1200px"
}
```

## Components

### Pill Button

**Role:** Standard interactive button, typically for secondary actions.

Background: Snowdrift (#ffffff), Text: Jet Black (#000000), Border: 1px solid Jet Black (#000000), Border-radius: 9999px, Padding: 2px 24px.

### Primary Action Block

**Role:** Prominent interactive block for primary calls to action.

Background: Action Blue (#0066cc), Border-radius: 24px (but data also shows 0px and has 0 padding so check context), Padding not explicitly defined, but visually generous. This serves as a background for clickable elements.

### Tertiary Card

**Role:** Informational cards or feature blocks with a substantial background color.

Background: Midnight Ink (#0e2575), Border-radius: 24px, No shadow. These cards present content directly on a dark primary background.

### Feature Icon Circle

**Role:** Decorative circular background for icons within feature sections.

Background: Deep Plum (#213680), Border-radius: 50% (circular), No shadow, No padding. Used as a container for illustrative icons.

### Standard Content Card

**Role:** General purpose content card for displaying information.

Background: Snowdrift (#ffffff), Border-radius: 24px, No shadow, Padding: 40px, or 24px on certain variations. Provides a clean, elevated surface for text and visuals.

### Ghost Input Field

**Role:** Text input field with minimal styling.

Background: transparent (rgba(0,0,0,0)), Text: Jet Black (#000000), Border: 1px solid Lavender Mist (#e6e0f8), Border-radius: 8px, Padding: 0px 16px. Focus state likely uses a darker bordering blue.

### Pill Badge

**Role:** Informational tags for categorization or status.

Background: Wheat Dust (#f9f7f3), Text: Jet Black (#000000), Border-radius: 9999px, Padding: 8px 16px. Used for compact labels.

## Do's

- Always use Maison Neue for body text and headlines, varying weights for hierarchy.
- Use Action Blue (#0066cc) for all primary interactive elements, ensuring its vibrant color signifies action.
- Apply a 24px border-radius to all cards and major content blocks to maintain a consistent soft corner aesthetic.
- Employ the 9999px border-radius for all buttons and badges for a distinct pill-shaped appearance.
- Maintain generous vertical spacing between sections, primarily 96px, to create comfortable information blocks.
- Utilize Off-White Canvas (#f4f1ea) as the default background for light sections, creating an open and airy base.
- Ensure input fields use Lavender Mist (#e6e0f8) for their border, signaling a subtle interactive element.

## Don'ts

- Avoid using multiple chromatic colors for primary calls to action; Action Blue (#0066cc) is the sole accent for this role.
- Do not introduce sharp corners on cards or buttons; aim for the established 24px or 9999px radius.
- Refrain from heavy drop shadows; elevation is primarily achieved through background color shifts and subtle borders, not complex shadow layers.
- Do not deviate from the Maison Neue and Spoof typefaces; avoid using system fonts or other custom fonts.
- Avoid dense, packed layouts; embrace comfortable spacing of 8px for elements and 96px for sections.
- Do not use dark backgrounds for general body text areas; Snowdrift (#ffffff) and Off-White Canvas (#f4f1ea) are for readability.
- Avoid making text links indistinguishable from body text; ensure they use Action Blue (#0066cc) for clarity.

## Layout

The page uses a maximum-width 1200px centered layout for most content, with occasional full-bleed sections. The hero features a large, centered headline (Maison Neue display-lg) over a clear Off-White Canvas background, with an abstract illustration providing visual interest. Sections alternate between Off-White Canvas and Midnight Ink (#0e2575) backgrounds, creating a clear vertical rhythm. Content is generally arranged in two-column layouts with text on one side and a visual element or card on the other, or in multi-column card grids for feature showcases. The navigation is a sticky top bar with a logo, text links, and a pill-shaped portal button.

## Imagery

The site uses a mix of flat, vector-based illustrations and simple, clean iconography. Illustrations feature abstract representations of music-related concepts and metadata flows with organic, flowing lines, primarily using the Accent Blue (#0b5aaa) for strokes and a limited secondary palette. Icons are predominantly outlined, matching the stroke weight of illustrations, often presented within circular color backgrounds. Imagery serves an explanatory and decorative role, enhancing understanding without being photo-realistic. Density is medium, with illustrations often anchoring sections or filling background spaces without overwhelming text content.

## Similar Brands

| Business | Why |
| --- | --- |
| Figma | Clean, spacious white canvas with prominent accent color for interactive elements and a clear typographic hierarchy. |
| Linear | Focus on clarity and conciseness, using a limited color palette and functional, bold typography to guide the user. |
| Relume | Combines prominent, readable typography with structured, card-based layouts and a strong accent color against a light background. |
| Webflow | Utilizes a modern geometric sans-serif typeface, clean section breaks, and strategic use of a primary brand color for emphasis. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #f4f1ea
border: #e6e0f8
accent: #0b5aaa
primary action: #0066cc (outlined action border)

Example Component Prompts:
1. Create an Outlined Primary Action: Transparent background, #0066cc border and text, 9999px radius, compact pill padding. Use it for the main CTA instead of a filled button.
2. Design a standard informational card: title 'Metadata Management', font Spoof weight 500, size 22px, text color Jet Black (#000000). Body text Maison Neue weight 400, size 16px, text color Jet Black (#000000). Card background Snowdrift (#ffffff), border-radius 24px, padding 40px.
3. Implement a Hero headline: text 'Take control of your music metadata', font Maison Neue weight 600, size 80px, letter-spacing -0.03em, text color Jet Black (#000000) on Off-White Canvas (#f4f1ea) background.
4. Generate a feature section block: background Midnight Ink (#0e2575), containing a circular icon with a Deep Plum (#213680) background and a label text Maison Neue weight 500, size 19px, color Snowdrift (#ffffff).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521304829-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521304829-thumb.jpg |
