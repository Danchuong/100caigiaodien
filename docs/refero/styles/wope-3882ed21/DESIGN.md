# Wope — Refero Style

- Refero URL: https://styles.refero.design/style/3882ed21-8ef8-4bc9-b125-7791c0f136bb
- Site URL: https://wope.com
- ID: 3882ed21-8ef8-4bc9-b125-7791c0f136bb
- Theme: dark
- Industry: saas
- Created: 2026-04-07T11:31:03.000Z
- Ranks: newest: 943, popular: 182, trending: 643

> Wope - violet horizon interface. Think of a dark observatory table with a purple light bloom rising from below the glass.

## Description

Wope - violet horizon interface. The page feels like a control deck lit from beneath by ultraviolet light: a nearly black-violet canvas, pale gray body copy, and concentrated purple glow under the product UI. The signature move is contrast by illumination rather than by layering — surfaces stay close to #0a0118 and depth comes from translucent white borders, blur, and radiant gradients instead of heavy shadow. Rebond Grotesque appears only where the brand wants scale and impact, while Inter V handles everything else with tight negative tracking in larger sizes and occasional wide-tracked utility text. Buttons, badges, and small controls are all full pills at 999px radius, set against mostly 16px cards, so soft controls float inside a more architectural content frame.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Night Violet | #0a0118 | neutral | Page background, dark card surfaces, footer and section canvas |
| Void Plum | #0c0616 | neutral | Inverse text on light treatments, occasional dark text on pale surfaces |
| Soft Quartz | #ffffff | neutral | Primary headings, buttons, borders, icons, input text, dominant foreground |
| Muted Steel | #d2d0dd | neutral | Secondary heading tone, brighter muted copy over Night Violet |
| Ash Lilac | #9b96b0 | neutral | Body copy, navigation links, supporting labels, low-emphasis UI text |
| Dim Fog | #85808c | neutral | Inactive icons, subtle separators, tertiary interface details |
| Ultraviolet Core | #713dff | brand | Primary accent, active links, luminous highlights — saturated violet against the black-violet canvas creates the site’s underlit glow |
| Lilac Beam | #b7a4fb | accent | Gradient flare, line effects, ambient glow edges — used as the cooler top note inside purple light blooms |
| Horizon Glow | #8562ff | accent | Gradient midpoint and visual hotspot — the brighter violet that makes hero illumination feel energized instead of flat |
| Glass White 04 | #ffffff | neutral | Tinted fills for ghost pills, badge backgrounds, translucent overlays |
| Glass White 10 | #ffffff | neutral | Hairline borders on pills and glass panels |
| Ultraviolet Horizon | #8562ff | accent | Hero light field, illuminated dividers, ambient section glow |
| Violet Beam | #8562ff | accent | Brighter line and halo treatments where the glow should read crisp instead of misty |
| Deep Fade Veil | #16092a | neutral | Section overlays and bottom fades that darken content without breaking the purple atmosphere |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter V | Inter | 400, 500, 700 | 14px, 16px, 18px, 20px, 24px, 28px | 1.15, 1.33, 1.40, 1.43, 1.50, 1.56, 1.71 | System font for navigation, body copy, links, buttons, badges, inputs, and smaller headings. The custom build is doing more than a stock Inter install: disabled standard ligature behavior plus alternate stylistic sets make the text feel slightly engineered rather than default SaaS. Use 400 for body, 500 for controls and links, 700 for compact emphasis; apply tighter tracking at larger UI sizes and the wide tracking only for utility-style labels. |
| Rebond Grotesque | Sora | 700 | 20px, 24px, 56px, 72px | 1.11, 1.14, 1.33, 1.60 | Display and headline font for hero statements and major section titles. The heavier serifless grotesque gives Wope its large-scale voice: broad, compact, and slightly formal, which keeps the glowing purple environment from feeling playful. Use only for headline moments, not for buttons or dense UI. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 16 | -0.28 |
| body | 16 | 21 | -0.16 |
| subheading | 18 | 28 | -0.36 |
| heading-sm | 24 | 36 | -0.48 |
| heading | 28 | 48 | 2.24 |
| heading-lg | 56 | 74 | -1.12 |
| display | 72 | 80 | -1.44 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "16px",
    "badges": "999px",
    "inputs": "0px",
    "buttons": "999px",
    "overlayCards": "10px"
  },
  "elementGap": "16px",
  "sectionGap": "108px",
  "cardPadding": "28px",
  "pageMaxWidth": "1248px"
}
```

## Components

### Primary CTA Button Group



### Keyword Data Table Card



### Logo Rail Social Proof Strip



### Primary Glass CTA Pill

**Role:** Main action button in hero and high-attention areas

Use a 999px pill with background rgba(255,255,255,0.04), 1px solid rgba(255,255,255,0.1), white label text, and padding 7px 24px. Keep the fill translucent so the button reads like lit glass floating above #0a0118 rather than a solid chip.

### Header Outline Pill Button

**Role:** Secondary header actions such as Log in

Transparent background, 1px solid rgba(255,255,255,0.1), 999px radius, padding 4px 16px, label in white or Ash Lilac depending on emphasis. This variant should feel lighter and smaller than the primary CTA.

### Text Navigation Pill

**Role:** Minimal nav actions and tertiary controls

Transparent background, no visible border, 999px radius, padding 4px 24px, white text. Use when the interface wants pill spacing without a framed container.

### Hero Trial Badge

**Role:** Compact promotional label above or below hero copy

Pill badge with background rgba(255,255,255,0.04), white text, 999px radius, and padding 4px 14px. Border may be omitted or kept at 1px rgba(255,255,255,0.1) when placed over a strong glow.

### Feature Surface Card

**Role:** Primary content card for feature summaries and product panels

Use Night Violet #0a0118 background, 16px radius, no shadow, and internal padding of 28px when content sits inside. Separate from the page with 1px translucent white borders or slight glow edges rather than elevation.

### Frosted Info Card

**Role:** Secondary glass panel for smaller callouts

Use background rgba(255,255,255,0.02), 16px radius, no shadow, 28px padding, and optional backdrop blur(4px). This reads as a lighter film over the dark canvas.

### Overlay Mini Card

**Role:** Floating stat, tooltip, or decorative UI inset

Use background rgba(10,1,24,0.2), 10px radius, no shadow. Combine with blur(8px) and a thin rgba(255,255,255,0.1) border when it sits on top of product visuals.

### Product Screenshot Frame

**Role:** Large hero UI showcase container

Large 16px rounded frame in #0a0118 with subtle internal glow, no shadow, and an underlighting treatment using the Ultraviolet Horizon gradient. The screenshot should appear embedded into the purple light field, not hovering above it.

### Header Bar

**Role:** Top navigation container

Full-width bar over the dark canvas, content centered within 1248px, low-contrast links in Ash Lilac, and action pills aligned right. Use 16px horizontal grouping gaps and a restrained 78px height zone.

### Borderless Input Field

**Role:** Email or search input inside dark callout forms

Transparent background, no visible border, 0px radius, white text, padding 14px 130px 14px 20px. Pair with a surrounding card or underline rather than boxing the field itself.

### Logo Rail

**Role:** Social-proof brand strip

Contained horizontal row of monochrome partner logos in white or Dim Fog on the dark canvas. Keep the rail low contrast and evenly spaced so it sits as a quiet separator between hero and feature content.

### Section Block

**Role:** Standard vertical content band

Transparent section wrapper with 124px top and bottom padding when used as a major page band. Inside, center content and keep internal stacks at 16px or 24px gaps.

## Do's

- Use Night Violet #0a0118 as the dominant canvas and keep most sections within that same dark-violet family.
- Use Rebond Grotesque 56px or 72px with -1.12px to -1.44px tracking for hero and section headlines.
- Set body and navigation text in Inter V using Ash Lilac #9b96b0 for default copy and Soft Quartz #ffffff for emphasis.
- Use 999px radius for buttons and badges; reserve 16px radius for cards and 10px for floating overlays.
- Build glow with Ultraviolet Core #713dff, Lilac Beam #b7a4fb, and Horizon Glow #8562ff gradients instead of heavy drop shadows.
- Use 1px borders in rgba(255,255,255,0.1) on pills, glass cards, and framed surfaces.
- Keep vertical section rhythm large: 108px section gaps and 124px padding on major content bands.

## Don'ts

- Do not introduce bright non-violet accents like teal, green, or orange into primary UI actions.
- Do not use square or lightly rounded buttons; controls are pills at 999px radius.
- Do not place strong opaque white cards on the page; surfaces stay dark or translucent over #0a0118.
- Do not add conventional black box-shadows; depth comes from blur, borders, and glow gradients.
- Do not use Rebond Grotesque for body copy, labels, or buttons.
- Do not collapse muted text and primary text into one tone; keep #9b96b0 for support text and #ffffff for primary content.
- Do not use bordered rectangular inputs; the input itself is borderless and relies on its container treatment.

## Imagery

The page is product-visual first: large contained screenshots of the SEO interface, framed with rounded corners and immersed in purple glow. Graphics are abstract and atmospheric rather than illustrative — grid lines, light rays, and radiant horizon effects create the scene around the UI. Logos are monochrome and quiet. The layout is text-dominant at the top, then gives substantial visual area to the product frame, so imagery works as proof of the software rather than decoration.

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | Shared dark product-first presentation with restrained neutrals and concentrated violet illumination |
| Raycast | Similar black-purple glow field and glassy, pill-based control styling |
| Arc | Uses atmospheric gradients and soft-luminous dark surfaces instead of traditional shadows |
| Warp | Comparable dark developer-style canvas with bright accent lighting and centered hero statements |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference: background #0a0118; primary text #ffffff; body text #9b96b0; border rgba(255,255,255,0.1); CTA accent #713dff; glow highlight #8562ff. Example component prompts: 1) Create a hero section with background #0a0118, centered Rebond Grotesque headline at 72px weight 700 line-height 1.11 letter-spacing -1.44px in #ffffff, supporting Inter text at 18px weight 400 line-height 1.56 in #9b96b0, and a glass CTA pill with rgba(255,255,255,0.04) fill, 1px rgba(255,255,255,0.1) border, 999px radius, 7px 24px padding, white text. 2) Create a dark product screenshot frame: 16px radius card in #0a0118, no shadow, thin rgba(255,255,255,0.1) border, purple underglow using linear-gradient(180deg, rgba(183,164,251,0) 0%, rgba(183,164,251,0.5) 50%, rgba(133,98,255,0.5) 75%, rgba(133,98,255,0) 100%). 3) Create a header bar inside 1248px max width with Inter 14px/16px links in #9b96b0, 16px item gaps, a transparent outline login pill with 4px 16px padding and 999px radius, plus a stronger glass signup pill. 4) Create a feature card using #0a0118 background, 16px radius, 28px padding, headline in Rebond Grotesque 24px #ffffff, body in Inter 16px #9b96b0, and no drop shadow. 5) Create a promo badge with rgba(255,255,255,0.04) fill, 999px radius, padding 4px 14px, white 14px Inter text, placed above a dark section title.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1776127671825-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1776127671825-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/3882ed21-8ef8-4bc9-b125-7791c0f136bb-1777559596411-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/3882ed21-8ef8-4bc9-b125-7791c0f136bb-1777559596411-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/3882ed21-8ef8-4bc9-b125-7791c0f136bb-1777559596411-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/3882ed21-8ef8-4bc9-b125-7791c0f136bb-1777559596411-preview-detail-poster.jpg |
