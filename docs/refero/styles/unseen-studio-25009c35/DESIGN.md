# Unseen Studio® — Refero Style

- Refero URL: https://styles.refero.design/style/25009c35-8b3b-4898-9295-3e0e0aa07207
- Site URL: https://unseen.co
- ID: 25009c35-8b3b-4898-9295-3e0e0aa07207
- Theme: light
- Industry: agency
- Created: 2026-02-07T12:31:57.000Z
- Ranks: newest: 1222, popular: 195, trending: 151

> Minimalist editorial canvas; stark black text on an expansive white backdrop, with every letter precisely placed.

## Description

This design system evokes a sense of stark minimalism and intellectual rigor, like a high-fashion editorial. The limited monochrome palette paired with custom serif and sans-serif typefaces creates a distinctive, almost academic-yet-modern feel. The generous use of letter spacing on display text, combined with tightly controlled line heights at smaller sizes, adds to the precise, almost etched quality of the content. Absence of decorative elements pushes focus entirely onto typography and content.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Pitch Black | #000000 | neutral | Primary text, critical icons, primary borders, high-contrast accents. |
| Frost White | #ffffff | neutral | Page backgrounds, primary container backgrounds. |
| Canvas White | #f1edeb | neutral | Subtle background for specific sections, providing a minimal textural shift from pure white. |
| Graphite Text | #212121 | neutral | Secondary text for links, navigation, and body copy that maintains high contrast but is slightly softer than true black. |
| Light Gray Text | #d6d6d6 | neutral | Muted text, subtle borders, and background accents for secondary elements. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Neue Montreal | Inter | 400, 700 | 10px, 12px, 14px, 15px, 17px, 19px, 29px, 90px | 0.86, 1.00, 1.10, 1.50 | Primary sans-serif for body content, navigation, buttons, and smaller headings. Its slightly condensed forms maintain a compact yet readable appearance, even with generous negative letter spacing. |
| Saol Display | Playfair Display | 400 | 19px, 90px | 0.90, 1.00 | Primary serif for prominent headings and selected navigational elements. Its elegant, slightly condensed forms with a whisper of letter spacing provide a distinct editorial voice without feeling decorative. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.5 | -0.016 |
| body | 15 | 1.5 | -0.016 |
| heading | 19 | 1 | -0.016 |
| heading-lg | 29 | 1 | -0.016 |
| display | 90 | 0.9 | -0.016 |

## Spacing & Shape

```json
{
  "radius": {
    "small": "17.28px",
    "default": "23.76px"
  },
  "elementGap": "6px",
  "sectionGap": "90px",
  "cardPadding": "17px",
  "pageMaxWidth": null
}
```

## Components

### Navigation Links



### Editorial Heading Display



### Project Index Card



### Navigation Link

**Role:** Main navigation items and sub-navigation.

Text uses Saol Display, weight 400, size 19px for top-level, and Neue Montreal at various sizes for sub-menus, in Pitch Black. Letter spacing is -0.0160em. No underline by default; hover state is not explicitly defined in data but implies a potential shift in color or weight for interaction. A generous left/right padding of 90px on the navigation bar indicates wide spacing.

### Ghost Button (Circular)

**Role:** Icon-only interactive elements like hamburger menus or sound toggles.

Transparent background (rgba(0, 0, 0, 0)), Pitch Black text and border top color (rgb(0, 0, 0)). Fully circular with borderRadius=50%, no padding, size is determined by icon content, suggesting compact, unobtrusive controls.

### Body Text Block

**Role:** General paragraph content and descriptions.

Uses Neue Montreal at 15px or 17px, weight 400, in Graphite Text (#212121) or Pitch Black (#000000). Line height is typically 1.50 for readability, with subtle letter spacing inherent to the typeface.

### Editorial Heading

**Role:** Primary page titles and section headers.

Uses Saol Display, weight 400, at 90px. Letter spacing is -0.0160em, in Pitch Black. Combined with minimal line height (e.g., 0.90), this creates a commanding yet refined visual presence.

## Do's

- Use Pitch Black (#000000) for primary text elements and Frost White (#ffffff) for backgrounds to maintain high contrast (21.0:1 AAA).
- Employ Saol Display for all large headings (90px) and key navigation items (19px) to establish the brand's editorial voice.
- Apply letter-spacing of -0.0160em to both Saol Display and Neue Montreal typefaces across all sizes to reinforce precision.
- Utilize Neue Montreal for all body copy, button labels, and secondary navigation elements, ensuring legibility at smaller sizes (10px - 29px).
- Prioritize generous padding and margin to create spacious layouts, especially with 90px padding around major content blocks.
- Implement circular ghost buttons (borderRadius: 50%, transparent background, #000000 border) for all compact interactive icons.
- For subtle background variation, use Canvas White (#f1edeb) instead of pure Frost White when a slight textural shift is desired.

## Don'ts

- Avoid using saturated or chromatic colors; the palette is strictly achromatic to preserve the system's stark, minimalist identity.
- Do not introduce heavy shadows or gradients; the design relies purely on typography, spacing, and subtle color shifts for depth.
- Refrain from altering the defined letter spacing for typefaces; the -0.0160em value is critical to the brand's precise visual character.
- Do not clutter layouts with extraneous visual elements; the aesthetic demands expansive white space and a focus on essential information.
- Avoid standard rectangular button shapes; interactive elements should be subtle, circular, or text-based to align with the minimalist interaction model.
- Do not use font weights other than 400 and 700 for Neue Montreal, and only 400 for Saol Display; these specific weights define the typographic hierarchy.

## Layout

The page exhibits a full-bleed layout which prioritizes extreme white space, with content typically centered or justified to the left/right edges of the viewport defined by generous implied padding (seen with 90px on content blocks). The header features minimal, widely spaced navigation links on the right, balanced by the brand logo on the left. Section rhythm is implied by content shifts rather than distinct dividers; elements are vertically stacked with substantial section gaps (e.g., 90px). There's no evident grid for cards or complex content arrangements, leaning towards single-column, highly editorial presentations. The overall density is spacious, emphasizing breathing room around all elements. Navigation is a top bar, fixed or sticky (implied by header structure).

## Imagery

The visual language is characterized by an absence of traditional imagery in the provided view, relying instead on pure UI elements. If present, it would likely feature highly composed, perhaps monochromatic or desaturated photography, or very abstract, minimal graphics that would not disrupt the stark, typographic focus of the design. The current presentation is text-dominant, with icons functioning as functional accents rather than decorative elements. There is no product photography, illustrations, or 3D renders evident, suggesting a focus on information and interaction over visual 'fluff'.

## Similar Brands

| Business | Why |
| --- | --- |
| Awwwards | Shares a similar emphasis on high-contrast, minimalist UI, and editorial-style typography with generous spacing. |
| Basic Agency | Known for stark, elegant, and often monochromatic designs that prioritize content and sophisticated typefaces. |
| Pentagram | Exhibits a similar design philosophy of structured minimalism, where every element serves a clear purpose and excess is removed. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: #000000 (Pitch Black)
- Background: #ffffff (Frost White)
- Accent Background: #f1edeb (Canvas White)
- Secondary Text: #212121 (Graphite Text)
- Border/Subtle Text: #d6d6d6 (Light Gray Text)

### Example Component Prompts
1. **Create a primary navigation bar**: Full width, Frost White background. Left-aligned logo 'Unseen Studio®' using Neue Montreal, 19px, weight 400, Pitch Black. Right-aligned navigation links 'Index', 'Projects', 'Contact' using Saol Display, 19px, weight 400, letter-spacing -0.016em, Pitch Black, with 35px spacing between links.
2. **Generate a ghost circular button for an icon**: Transparent background, 50% border radius, 1px Pitch Black border, no padding. Icon in Pitch Black.
3. **Design a main page heading**: Saol Display, 90px, weight 400, line-height 0.9, letter-spacing -0.016em, Pitch Black. Positioned centrally in the viewport with a Frost White background.
4. **Create a body text paragraph**: Text using Neue Montreal, 15px, weight 400, line-height 1.5, letter-spacing -0.016em, Graphite Text (#212121). Ensure a top margin of 35px after a previous element.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925131510-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925131510-thumb.jpg |
