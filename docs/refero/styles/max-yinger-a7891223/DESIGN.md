# Max Yinger — Refero Style

- Refero URL: https://styles.refero.design/style/a7891223-a93e-4731-a1aa-4079f1ee928b
- Site URL: https://yinger.dev
- ID: a7891223-a93e-4731-a1aa-4079f1ee928b
- Theme: dark
- Industry: agency
- Created: 2026-03-04T17:53:11.000Z
- Ranks: newest: 1095, popular: 572, trending: 555

> Terminal aesthetic, crafted in code.

## Description

This design system evokes a sense of digital craftsmanship, like a custom-built terminal for a specialized task. The aesthetic leans into a high-contrast dark theme with stark white, monospace-inspired typography, creating an atmosphere of precision and focused utility. Punctuation marks and symbols are used as visual elements, giving the textual content a coded, programmatic feel. Slight rounding on interactive elements prevents harshness, while the overall minimal approach keeps the focus on core information and interactive 3D elements.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Basalt Black | #12130f | neutral | Page background, component backgrounds, base for interactive elements. |
| Quartz White | #e4dfda | neutral | Primary text color for headings, body text, and links; provides high contrast against the dark background. Also used for button borders. |
| Flint Gray | #3c3c38 | neutral | Subtle border color for interactive elements, creating a soft edge without drawing attention. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inline VF | IBM Plex Mono | 400 | 80px | 0.80 | Display headings. Its compressed, blocky structure gives a distinct, almost pixel-art feel at large sizes, fitting the digital, coded aesthetic. |
| Arbeit Contrast | Space Grotesk | 400 | 16px, 30px, 80px | 1.13, 1.25 | Used for main content headings, lists, and prominent links. The contrast in its name suggests its impactful, yet readable nature in this system. The 80px size might be an alternate display heading. |
| Arbeit Technik | JetBrains Mono | 400 | 12px | 1.25 | Body text, smaller links, and button labels. Its monospace-like appearance aligns with the overall terminal style. |

## Spacing & Shape

```json
{
  "radius": {
    "links": "2px",
    "buttons": "9999px",
    "default": "6px"
  },
  "elementGap": "4px",
  "sectionGap": "64px",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Social Link Pills



### Local Time & Bio Block



### Stats / Metadata Badge Row



### Pill Ghost Button

**Role:** Interactive elements, external links.

Buttons feature a `Basalt Black` background (rgba(18, 19, 15, 0.4)), `Quartz White` text (#e4dfda), and a subtle `Quartz White` border (rgba(228, 223, 218, 0.2)). Padding is 4px vertical, 12px horizontal, with a 9999px border-radius for a soft, pill-shaped appearance.

## Do's

- Prioritize `Quartz White` (#e4dfda) for all primary text content against `Basalt Black` (#12130f) backgrounds to maintain high contrast.
- Use `Inline VF` (or 'IBM Plex Mono') at 80px, weight 400, for primary display headings, without letter-spacing adjustments.
- Apply 9999px border-radius to all interactive buttons for a consistent pill shape.
- Utilize Arbeit Technik (or 'JetBrains Mono') for body text and labels, with a -0.05em letter-spacing at 12px.
- Maintain a compact spacing rhythm, using multiples of 4px for element gaps and button padding.
- When introducing subtle borders, use 1px `Flint Gray` (#3c3c38) for minimal visual separation.

## Don'ts

- Avoid using highly saturated colors; the system relies on achromatic tones and subtle accents.
- Do not deviate from the established font families; custom fonts 'Inline VF', 'Arbeit Contrast', and 'Arbeit Technik' are core to the brand identity.
- Do not use generic square corners for interactive elements; buttons require a 9999px radius.
- Do not introduce heavy box-shadows or complex elevation; the design's depth comes from content arrangement and subtle background changes.
- Do not vary line-height aggressively; stick to the specified 0.80 for display, 1.13-1.25 for headings/body.
- Do not add extra padding around sections beyond the 64px `sectionGap` unless for specific content needs, to preserve density.

## Layout

The page is a full-bleed dark canvas with content largely left-aligned and centrally focused. There is no explicit max-width for the main content block, giving a spacious, open feel. The hero section prominently features a large, interactive 3D graphic. Text is structured in distinct blocks with generous vertical spacing (64px `sectionGap`). Social links are stacked vertically on the right, providing a clear access point. The layout gives ample breathing room, highlighting individual content elements rather than dense information.

## Imagery

The site uses stylized 3D rendered abstract blocks in a soft pink hue, which serve as decorative elements. These blocks are positioned interactively, suggesting a focus on real-time 3D and interaction. They are contained and isolated, not bleeding into the UI, acting as dynamic decorative accents rather than content-carrying visuals. The style is geometric and polished, with a soft, almost glassy texture, contrasting with the stark typography. Icons appear minimal if at all, limited to social media links which are purely text-based within pill buttons.

## Similar Brands

| Business | Why |
| --- | --- |
| Vercel | Dark-mode UI with a focus on code-like typography and minimalist presentation. |
| Linear | High-contrast dark theme, heavy use of structured typography, and precise spacing for a technical user base. |
| Stripe (developer docs) | Emphasis on sleek, functional design with monospace fonts and subtle interactive elements in a dark context. |
| Framer | Modern, clean aesthetic with a focus on interactive elements and subtle 3D graphics in some contexts. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- Text: #e4dfda
- Background: #12130f
- Button Background: rgba(18, 19, 15, 0.4)
- Button Border: rgba(228, 223, 218, 0.2)

Example Component Prompts:
- Create a page with a `Basalt Black` (#12130f) background. Add a headline: 'YINGER' using `Inline VF` at 80px, weight 400, `Quartz White` text (#e4dfda).
- Generate a 'Github' button: `Basalt Black` background at 40% opacity (rgba(18, 19, 15, 0.4)), `Quartz White` text (#e4dfda), border `Quartz White` at 20% opacity (rgba(228, 223, 218, 0.2)), 9999px border-radius, 4px vertical padding, 12px horizontal padding.
- Display a body text paragraph: 'UI Engineer who dips his toes in Realtime 3D' using `Arbeit Technik` at 12px, weight 400, `Quartz White` text (#e4dfda), letter-spacing -0.05em, line-height 1.25.
- Create a secondary heading 'Interaction' using `Arbeit Contrast` at 30px, weight 400, `Quartz White` text (#e4dfda), line-height 1.13 and no letter-spacing.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925610298-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925610298-thumb.jpg |
