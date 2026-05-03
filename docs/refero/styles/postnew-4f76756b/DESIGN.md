# PostNew — Refero Style

- Refero URL: https://styles.refero.design/style/4f76756b-0f06-47a3-baad-d3846b23e132
- Site URL: https://www.postnew.xyz
- ID: 4f76756b-0f06-47a3-baad-d3846b23e132
- Theme: dark
- Industry: design
- Created: 2026-04-30T03:26:59.852Z
- Ranks: newest: 150, popular: 1152, trending: 1153

> Midnight gallery showcase

## Description

PostNew employs a dark-themed, highly compact visual system that prioritizes content over decorative UI. Deep charcoal backgrounds serve as a canvas for crisp white typography and minimal, unbordered components. The design maintains an atmospheric, theatrical aesthetic through its use of subtle blurring and a focus on raw imagery, allowing the content to define the mood. Interactive elements are sparse, using opacity shifts and a tight typographic hierarchy to convey function.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Pitch Black | #000000 | neutral | Text default, primary borders for ghost buttons, decorative outlines, icon fills |
| Charcoal Canvas | #1a1a1a | neutral | Primary page background |
| Active Charcoal | #242424 | neutral | Subtle background for interactive elements and secondary surfaces |
| Whisper Gray | #fafafa | neutral | Primary text color, prominent borders, active tab text |
| Muted Interaction | #5d5d5d | neutral | Background for specific interactive links, hover states, and filled icons |
| Translucent Accent | #2b2b2b99 | accent | Supporting palette color for small decorative accents when the core palette needs contrast. Do not promote it to the primary CTA color |
| Mid-Tone Transparency | #3d3d3d99 | accent | Supporting palette color for small decorative accents when the core palette needs contrast. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| sans-serif | system-ui | 400 | 12px | 1.20 | Labels for compact navigation, utility text, and small interactive elements. Relies on system-default for speed and legibility at small sizes. |
| ABC Diatype | Inter, Arial | 500 | 18px, 22px | 1.13, 1.15 | Primary body text, article titles, and larger content headings. The negative letter-spacing (-0.025em) provides a distinctive, tight feel, while the specific font feature settings enforce a unique, structured character rendering. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.2 |  |
| body | 18 | 1.13 | -0.45 |
| heading | 22 | 1.15 | -0.55 |

## Spacing & Shape

```json
{
  "radius": {
    "tabs": "0px",
    "cards": "0px",
    "buttons": "0px"
  },
  "elementGap": "10px",
  "sectionGap": "50px",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Navigation Button

**Role:** Primary navigation elements

Text-only buttons using no background, no border, and 0px border-radius. Text color is #000000. Padding is extremely minimal (0px).

### Filled Navigation Button

**Role:** Contextual navigation or utility buttons

Minimal fill buttons with a translucent dark background rgba(43, 43, 43, 0.6) and #000000 text. Borders are 0px, radius 0px. Padding 10px vertical, 12px horizontal.

## Do's

- Prioritize large, impactful imagery or video content, allowing it to dictate the mood and occupy significant visual space.
- Use Pitch Black (#000000) as the default text and border color for ghost components, ensuring high contrast against light surfaces or as an accent on dark.
- Apply Charcoal Canvas (#1a1a1a) for all primary page backgrounds, creating a consistent dark foundation.
- Maintain a compact density, using 10px for vertical and horizontal gaps between most elements.
- Set all interactive rectangular elements, like buttons and containers, to '0px' border-radius, enforcing a sharp, precise aesthetic.
- Employ ABC Diatype with its specific font feature settings and -0.025em letter-spacing for all primary headings and body copy, ensuring consistent brand typography.
- Use the Muted Interaction (#5d5d5d) background color for subtle interactive highlights or secondary links, indicating interactivity without strong visual emphasis.

## Don'ts

- Avoid using any border-radius greater than 0px; the system emphasizes sharp edges.
- Do not introduce colorful UI accents or vibrant primary action colors; maintain a monochromatic palette with subtle transparency for interaction.
- Refrain from using strong box-shadows or heavy elevation effects; depth is achieved primarily through surface shifts or content imagery itself.
- Do not deviate from the specified font families, weights, and letter-spacing for brand typography, especially ABC Diatype.
- Avoid large, prominent buttons with strong background fills unless utilizing the specific 'Filled Navigation Button' style.
- Do not use generic system fonts for prominent content text; always use ABC Diatype for body and heading roles.
- Avoid introducing significant padding or broad spacing for individual elements; maintain the compact density with 10px element gaps.

## Layout

The site employs a full-bleed layout strategy, particularly for its hero and main content sections, allowing imagery and motion to extend to the viewport edges. Content often appears in split-screen arrangements with distinct canvases, sometimes alternating. The hero pattern is dynamic, featuring large, immersive visuals often paired with bold, custom typography within the content itself. Vertical rhythm is established by section gaps of 50px, but within components, spacing is very compact. Navigation is minimal, consisting of a top-centered, semi-transparent bar with ghost text links and a subtle left-aligned utility bar. Content is generally centered or arranged in a text-left/visual-right pattern, adapting to the dynamic media.

## Imagery

The visual language predominantly features high-impact, full-bleed motion graphics and 3D renders that act as primary content. These visuals often have a hyper-realistic or abstract quality, using vibrant, sometimes surreal, colors in contrast to the muted UI. Imagery is central to the experience, often taking up entire screen sections or split views, rather than being contained within cards or frames. There are no consistent corner treatments; images are raw-edged, emphasizing their content. Icons are minimal, typically monochrome outlines, used sparingly for navigation or utility.

## Similar Brands

| Business | Why |
| --- | --- |
| Awwwards | Heavy reliance on fullscreen, impactful imagery and video for content presentation, with a minimalist UI overlay. |
| Framer | Use of very tight letter-spacing and precise typographic control to define brand identity, often with dark mode as a dominant theme. |
| Huge Inc. | Dark UI, sharp edges, and emphasis on showcasing creative work with minimal decorative elements, letting the content shine. |
| Basic Type Foundry | Focus on bespoke typography as a core visual element, with highly controlled letter-spacing and character features to create distinct branding. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
text: #fafafa
background: #1a1a1a
border: #000000
accent: #2b2b2b99
primary action: no distinct CTA color

### 3-5 Example Component Prompts
1. Create a primary navigation bar: background #1a1a1a, with centered 'Index', 'Feed', 'Profile' text links. Each link should be #000000 text and act as a Ghost Navigation Button (0px padding, 0px border-radius, no background).
2. Design a content block on a #1a1a1a background: large headline 'Magic Is In The Air' using ABC Diatype, weight 500, size 22px, line height 1.15, letter-spacing -0.025em, color #fafafa. Below it, a line of body text at 18px ABC Diatype, weight 500, line height 1.13, letter-spacing -0.025em, color #fafafa.
3. Create a secondary action button for a menu: Text 'More Info' using sans-serif, weight 400, size 12px, color #000000. Background #242424, 0px border-radius, 10px vertical and 12px horizontal internal padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519602870-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519602870-thumb.jpg |
